$(document).ready(function(){
// راه‌اندازی اسلایدر
const swiper = new Swiper('.hero-slider', {
    loop: true,
    autoplay: {
        delay: 5000,
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});
})
