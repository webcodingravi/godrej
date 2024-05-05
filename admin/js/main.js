/****navbar scroll */

let nav = document.querySelector(".deshboard-header");

window.onscroll = function() {
 if(document.documentElement.scrollTop > 20) {
     nav.classList.add('scroll-on');
   
 }else{
  nav.classList.remove('scroll-on');

 }

}

