
/* import { girocode } from "@dipser/epc-qr-code.js";
var g = girocode({ 'bic': 'PBNKDEFF', 'name': 'Postbank', 'iban': 'DE02100100100006820101', 'currency': 'EUR', 'amount': '10.00', 'reason': 'Invoice X' });
document.querySelector('#elemid').innerHTML = g.svg(); */
import gsap from 'gsap';
let arrow = document.querySelector('.js-arrow');

arrow.addEventListener('click', () => {
    gsap.to(".rainbow", {
    });
    console.log("coucou");
});