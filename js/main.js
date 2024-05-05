//Header Scroll
let nav = document.querySelector(".navbar");
let mybutton = document.getElementById("myBtn");
window.onscroll = function ()  {
    if(document.documentElement.scrollTop > 20) {
        nav.classList.add("header-scrolled");
        mybutton.style.display = "block"
    }
    else {
        nav.classList.remove("header-scrolled");
        mybutton.style.display = "none";
    }
}

//nav hide
let navBar = document.querySelectorAll(".nav-link");
let navCollapse = document.querySelector(".navbar-collapse.collapse");
navBar.forEach(function(a) {
    a.addEventListener("click", function(){
        navCollapse.classList.remove("show");
    })
}
) 


/****BUTTON SLIDE TOP */

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }


