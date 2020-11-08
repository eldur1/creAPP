
/* import { girocode } from "@dipser/epc-qr-code.js";
var g = girocode({ 'bic': 'PBNKDEFF', 'name': 'Postbank', 'iban': 'DE02100100100006820101', 'currency': 'EUR', 'amount': '10.00', 'reason': 'Invoice X' });
document.querySelector('#elemid').innerHTML = g.svg(); */
import { gsap } from 'gsap';
import { _numWithUnitExp } from 'gsap/gsap-core';
import { ScrollTrigger } from "gsap/ScrollTrigger";
gsap.registerPlugin(ScrollTrigger);





// 

// Position of nav--main in the window
let nav_main = document.querySelector(".nav-container");
let wHeight = window.innerHeight;

window.addEventListener('resize', () => {
    if(window.innerWidth > 900) {
        window.addEventListener('scroll', () => {
            let nav_pos = nav_main.getBoundingClientRect();
            let nav_pos_top = nav_pos.top;
            let dynamicOpacity = 1 - (nav_pos_top/wHeight);
            nav_main.style.opacity = dynamicOpacity;
            });
    }
    else {
        nav_main.style.opacity = 1;
    }
});



// Burger menu 
let toggle = true;
let burger = document.querySelector('.burger-menu');
burger.addEventListener('click', toggleMenu);
function toggleMenu() {

    if(toggle) {
        gsap.to(nav_main, {
            x:"-200px"
        });
        toggle = false;
    }
    else {
        gsap.to(nav_main, {
            x:"0"
        });
        toggle = true;
    }

}