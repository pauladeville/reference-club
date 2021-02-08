import './rellax.min.js';

window.onload = () => {
    const hamburger = document.querySelector('.hamburger');
    const mobile_nav = document.querySelector('#mobile-nav');
    hamburger.addEventListener('click', () => {
        hamburger.classList.toggle('is-active');
        mobile_nav.classList.toggle('is-active');
    })
    mobile_nav.addEventListener('click', () => {
        hamburger.classList.toggle('is-active');
        mobile_nav.classList.toggle('is-active');
    })
}

var rellax = new Rellax('.rellax');