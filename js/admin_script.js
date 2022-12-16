let menu = document.getElementById('menu-btn');
let navbar = document.querySelector('.header .navbar');
let accountBox = document.querySelector('.header .account-box')
let userBtn = document.getElementById('user-btn');

menu.onclick = () => {
   // toggle nuima arba prideda
    navbar.classList.toggle('active');
    accountBox.classList.remove('active');
}
userBtn.onclick = () => {
   // toggle nuima arba prideda
    accountBox.classList.toggle('active');
    navbar.classList.remove('active');
}
window.onscroll = ()=>{
   navbar.classList.remove('active');
   accountBox.classList.remove('active');
}