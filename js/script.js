let userBox = document.querySelector('.user-box');
let userBtn = document.querySelector('#user-btn');

userBtn.onclick = () =>{
    userBox.classList.toggle('active');
    navbar.classList.remove('active');
}

let menuBtn = document.querySelector('#menu-btn');
let navbar = document.querySelector('.navbar');

menuBtn.onclick = () => {
    navbar.classList.toggle('active');
    userBox.classList.remove('active');
}

window.onscroll = ()=>{
    
    if(window.scrollY > 60){
        document.querySelector(' .header-2').classList.add('active');

    }else{
        document.querySelector(' .header-2').classList.remove('active');
    }
}



