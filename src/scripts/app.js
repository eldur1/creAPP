import { gsap } from 'gsap';
import { _numWithUnitExp } from 'gsap/gsap-core';
import { ScrollTrigger } from "gsap/ScrollTrigger";
gsap.registerPlugin(ScrollTrigger);


// QR Code
import { girocode } from "@dipser/epc-qr-code.js";

let bic = ""
let name = ""
let iban = ""
var g = girocode({
    'bic': bic,
    'name': name, 
    'iban': iban,
    'currency': 'EUR',
    'amount': '5.00',
    'reason': 'Invoice X' 
});
document.querySelector('#elemid').innerHTML = g.svg();

// 

// Position of nav--main in the window
let nav_main = document.querySelector(".nav-container");
let wHeight = window.innerHeight;
let closeMenu = document.querySelector('.link--close-menu');
// Affiche ou non le bouton close menu
function checkMobile() {
    // Si mobile
    if(window.innerWidth >= 900) {
        closeMenu.style.display = "none";
    }
}
checkMobile()

// Check window size
window.addEventListener('resize', () => {
    if(window.innerWidth > 900) {
        window.addEventListener('scroll', () => {
            let nav_pos = nav_main.getBoundingClientRect();
            let nav_pos_top = nav_pos.top;
            let dynamicOpacity = 1 - (nav_pos_top/wHeight);
            nav_main.style.opacity = dynamicOpacity;
            });
            closeMenu.style.display = "none";
    }
    else {
        nav_main.style.opacity = 1;
        closeMenu.style.display = "inline";

    }
});



// Burger menu 
let toggle = true;

let burger = document.querySelector('.burger-menu');
burger.addEventListener('click', () => {
    let wWidth = window.innerWidth
    gsap.to(nav_main, {
        x:-wWidth
    });
    toggle = false;
});

function closeAnimation() {
    let wWidth = window.innerWidth;
    gsap.to(nav_main, {
        x:0
    });
    toggle = true;
}
function toggleSelection() {

}
   
function menu() {
    closeAnimation()
    toggleSelection()
}
let link_main = document.querySelectorAll('.link--main');
for(let i=1; i < link_main.length; i++ ) {
    let item = link_main[i];
    item.addEventListener('click', menu)
    if(!item.classList.contains('link--selected')) {
        item.classList.add('.link--selected')
    }
}

