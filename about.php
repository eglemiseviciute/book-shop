<?php 

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header("location:login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="css/styles.css">

</head>
<body>
   
<?php include 'header.php';?>

<div class="heading">
   <h3>about us</h3>
   <p><a href="home.php">home</a>/about</p>
</div>

<section class="about">

<div class="flex">

<div class="image">
<img src="images/about.jpg" alt="">
</div>

<div class="content">
<h3>why choose us?</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores rerum dolor nam nesciunt. Ducimus magni cumque tempora consequuntur porro debitis sint perferendis error tempore culpa!</p>
<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum magni vel neque accusamus eius voluptate repudiandae non iure distinctio eligendi nihil minima quaerat dignissimos porro reiciendis, ea ipsum ducimus praesentium ratione iste alias id ex aspernatur? Odio facere praesentium officiis. 
   Corrupti odit iure dolorem laborum consequatur dolorum adipisci quasi delectus.</p>
    <a href="contact.php" class="btn">contact us</a>
</div>

</div>

</section>

<section class="reviews">

<h1 class="title"> client's reviews</h1>
<div class="box-container">

<div class="box">
   <img src="images/pic-1.png" alt="">
   <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
      Aliquam ea repellat error incidunt distinctio vel voluptates aut non eligendi praesentium debitis, unde in cum maiores.</p>
<div class="stars">
   <i class="fas fa-star"></i>
   <i class="fas fa-star"></i>
   <i class="fas fa-star"></i>
   <i class="fas fa-star"></i>
   <i class="fas fa-star-half-alt"></i>
</div>
<h3>ervi deo</h3>
   </div>

   <div class="box">
   <img src="images/pic-2.png" alt="">
   <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
      Aliquam ea repellat error incidunt distinctio vel voluptates aut non eligendi praesentium debitis, unde in cum maiores.</p>
<div class="stars">
   <i class="fas fa-star"></i>
   <i class="fas fa-star"></i>
   <i class="fas fa-star"></i>
   <i class="fas fa-star"></i>
   <i class="fas fa-star-half-alt"></i>
</div>
<h3>ervi deo</h3>
   </div>
   <div class="box">
   <img src="images/pic-3.png" alt="">
   <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
      Aliquam ea repellat error incidunt distinctio vel voluptates aut non eligendi praesentium debitis, unde in cum maiores.</p>
<div class="stars">
   <i class="fas fa-star"></i>
   <i class="fas fa-star"></i>
   <i class="fas fa-star"></i>
   <i class="fas fa-star"></i>
   <i class="fas fa-star-half-alt"></i>
</div>
<h3>ervi deo</h3>
   </div>
   <div class="box">
   <img src="images/pic-4.png" alt="">
   <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
      Aliquam ea repellat error incidunt distinctio vel voluptates aut non eligendi praesentium debitis, unde in cum maiores.</p>
<div class="stars">
   <i class="fas fa-star"></i>
   <i class="fas fa-star"></i>
   <i class="fas fa-star"></i>
   <i class="fas fa-star"></i>
   <i class="fas fa-star-half-alt"></i>
</div>
<h3>ervi deo</h3>
   </div>
   <div class="box">
   <img src="images/pic-5.png" alt="">
   <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
      Aliquam ea repellat error incidunt distinctio vel voluptates aut non eligendi praesentium debitis, unde in cum maiores.</p>
<div class="stars">
   <i class="fas fa-star"></i>
   <i class="fas fa-star"></i>
   <i class="fas fa-star"></i>
   <i class="fas fa-star"></i>
   <i class="fas fa-star-half-alt"></i>
</div>
<h3>ervi deo</h3>
   </div>

   <div class="box">
   <img src="images/pic-6.png" alt="">
   <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
      Aliquam ea repellat error incidunt distinctio vel voluptates aut non eligendi praesentium debitis, unde in cum maiores.</p>
<div class="stars">
   <i class="fas fa-star"></i>
   <i class="fas fa-star"></i>
   <i class="fas fa-star"></i>
   <i class="fas fa-star"></i>
   <i class="fas fa-star-half-alt"></i>
</div>
<h3>ervi deo</h3>
</div>

</div>


</section>

<section class="authors">
   <h1 class="title">greate authors</h1>
   <div class="box-container">
      <div class="box">
         <img src="images/author-1.jpg" alt="">
         
         <div class="share">
         <a href="#" class="fab fa-facebook"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>john dio</h3>
         <p>Popular publications: <span> "Lorem ipsum dolor" , "Lorem ipsum dolor sit amet"</span></p>
      </div>
      <div class="box">
         <img src="images/author-2.jpg" alt="">
         <div class="share">
         <a href="#" class="fab fa-facebook"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>john dio</h3>
         <p>Popular publications: <span> "Lorem ipsum dolor" , "Lorem ipsum dolor sit "</span></p>
      </div>
      <div class="box">
         <img src="images/author-3.jpg" alt="">
         <div class="share">
         <a href="#" class="fab fa-facebook"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>john dio</h3>
         <p>Popular publications: <span> "Lorem ipsum dolor" , "Lorem ipsum"</span></p>
      </div>
      <div class="box">
         <img src="images/author-4.jpg" alt="">
         <div class="share">
         <a href="#" class="fab fa-facebook"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>john dio</h3>
         <p>Popular publications: <span> "Lorem ipsum dolor" , "Lorem ipsum dolor sit amet"</span></p>
      </div>
      <div class="box">
         <img src="images/author-5.jpg" alt="">
         <div class="share">
         <a href="#" class="fab fa-facebook"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>john dio</h3>
         <p>Popular publications: <span> "Ipsum dolor" , "Lorem ipsum  sit amet"</span></p>
      </div>
      <div class="box">
         <img src="images/author-6.jpg" alt="">
         <div class="share">
         <a href="#" class="fab fa-facebook"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>john dio</h3>
         <p>Popular publications: <span> "Lorem ipsum" , "Lorem ipsum dolor "</span></p>
      </div>
      
   </div>
</section>






<?php include 'footer.php';?>
<script src="js/scripts.js"></script>

</body>
</html>