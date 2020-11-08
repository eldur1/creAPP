
/* import { girocode } from "@dipser/epc-qr-code.js";
var g = girocode({ 'bic': 'PBNKDEFF', 'name': 'Postbank', 'iban': 'DE02100100100006820101', 'currency': 'EUR', 'amount': '10.00', 'reason': 'Invoice X' });
document.querySelector('#elemid').innerHTML = g.svg(); */
import { gsap } from 'gsap';
import { _numWithUnitExp } from 'gsap/gsap-core';
import { ScrollTrigger } from "gsap/ScrollTrigger";
gsap.registerPlugin(ScrollTrigger);





// 

// Position of nav--main in the window
let nav_main = document.querySelector(".nav--main");
let wHeight = window.innerHeight;



window.addEventListener('scroll', () => {
let nav_pos = nav_main.getBoundingClientRect();
let nav_pos_top = nav_pos.top;
let dynamicOpacity = 1 - (nav_pos_top/wHeight);
nav_main.style.opacity = dynamicOpacity;

});
