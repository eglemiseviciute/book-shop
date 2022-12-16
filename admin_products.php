<?php 

include 'config.php';

session_start();

// sito admino reik kad jei niekas neprisiregines kad butu login page

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header("location:login.php");
};

// ikeliam produkta 
if(isset($_POST['add_product'])){
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $price = $_POST['price'];
$image_file = $_FILES["image"]['name'];
$path = 'uploaded_img/'.$image_file;


$select_product = "SELECT name FROM `products` WHERE name = '$name'";
$select_product_run = mysqli_query($conn,$select_product);

if(mysqli_num_rows($select_product_run)>0){
   $message[] = 'product name already added';
}else{
   $product_query = "INSERT INTO `products`(name,price,image) VALUES ('$name','$price','$image_file')";

   $product_query_run = mysqli_query($conn,$product_query);
   
   if($product_query){
      if ($_FILES["image"]["size"] > 2000000) {
         echo "Sorry, your file is too large.";
         
       }else{
      move_uploaded_file($_FILES['image']['tmp_name'], $path);
      $message[] =  "Product added successfully";
       }
   }else{
      $message[] =  "Something went wrong!";
   }
}
}
// kodel get 
if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   $delete_image_query = mysqli_query($conn,"SELECT image FROM `products` WHERE id= '$delete_id'") or die('query failed');
   $fetch_delete_image = mysqli_fetch_assoc($delete_image_query);
   unlink('uploaded_img/'.$fetch_delete_image['image']);
   
   mysqli_query($conn, "DELETE FROM `products` WHERE id = '$delete_id'") or die('query failed');
header('location:admin_products.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>products</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="css/admin_styles.css">

</head>
<body>
   <?php include 'admin_header.php';?>

      <!-- products CRUD -->
<section class="add-products">

<h1 class="title">shop products</h1>

<form action="" method="post" enctype="multipart/form-data">

<h3>add product</h3>
<input type="text" name="name" class="box" placeholder="enter product name" required>
<input type="number" min="0" name="price" class="box" placeholder="enter product price" required>
<input type="file" accept="iamge/jpg, image/jpeg, image/png" name="image" class="box" required>
<input type="submit" value="add product" name="add_product" class="btn">

</form>

</div>

</section>

<!-- show products -->
<section class="show-products">
<div class="box-container">
<?php 
// kad rodytu ikeltus produktus
$select_products = mysqli_query($conn, "SELECT * FROM `products` ") or die("query failed");

if(mysqli_num_rows($select_products)>0){
while($fetch_products = mysqli_fetch_assoc($select_products)){

   ?>
   <div class="box">
      <img src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">
      <div class="name"><?php echo $fetch_products['name']; ?></div>
      <div class="price">$<?php echo $fetch_products['price']; ?>/-</div>
      <!-- kad galetume updatint kaina -->
      <a href="admin_products.php?update=<?php echo $fetch_products['id']; ?>" 
      class="option-btn">update</a>
      <!-- kad galetume istrint -->
      <a href="admin_products.php?delete=<?php echo $fetch_products['id']; ?>" 
      class="delete-btn" onclick="return confirm('delete this product')";>delete</a>
   </div>
   <?php
}
}else{
   echo '<p class="empty">no product added yet!</p>';
}

if(isset($_POST['update_product'])){
   $update_p_id = $_POST['update_p_id'];
   $update_price = $_POST['update_price'];
   $update_name = $_POST['update_name'];
  
  
   mysqli_query($conn,"UPDATE `products` SET name = '$update_name',price = '$update_price' WHERE id='$update_p_id'") or die('query failed');

   $update_image = $_FILES['update_image']['name'];
   $update_image_size = $_FILES['update_image']['size'];
   $update_image_tmp_name = $_FILES['update_image']['tmp_name'];
   $update_folder = 'uploaded_img/'.$update_image;
   $update_old_image = $_POST['update_old_image'];

   if(!empty($update_image)){
      if($update_image_size > 2000000){
$message[]='image file size is too large';

      }else{
         mysqli_query($conn,"UPDATE `products` SET image = '$update_image',price = '$update_price' WHERE id='$update_p_id'") or die('query failed');
      move_uploaded_file($update_image_tmp_name, $update_folder);
      unlink('uploaded_img/'.$update_old_image);
      }
   }
   header('location:admin_products.php');
}

?>

</div>
</section>

<section class="edit-product-form">

<?php 
if(isset($_GET['update'])){
   $update_id = $_GET['update'];
   $update_query = mysqli_query($conn, "SELECT * FROM `products` WHERE id= '$update_id'") 
   or die('query failed');
if(mysqli_num_rows($update_query)>0){
   while($fetch_update = mysqli_fetch_assoc($update_query)){
      ?>
      <form action="admin_products.php" method="post" enctype="multipart/form-data">
         <input type="hidden" name="update_p_id" value="<?php echo $fetch_update['id'];?>" >
         <input type="hidden" name="update_old_image" value="<?php echo $fetch_update['image'];?>" >
         
         <img src="uploaded_img/<?php echo $fetch_update['image'];?>" alt="">
         <input type="text" name="update_name" value="<?php echo $fetch_update['name'];?>" 
         class="box" required placeholder="enter product name">
         <input type="number" name="update_price" value="<?php echo $fetch_update['price'];?>" 
         min="0" class="box" required placeholder="enter product price">
         <input type="file" class="box" name="update_image" accept="image/jpg,image/jpeg,image/png">
      <input type="submit" value="update" name="update_product" class="btn">
      <input type="submit" value="cancel" id="close-update" class="option-btn">
      </form>
      <?php
   }
}
}else{
echo '<script>document.querySelector(".edit-product-form").style.display = "none";</script>';
}

?>

</section>

<!-- custom admin js file link  -->
<script src="js/admin_script.js"></script>

</body>
</html>