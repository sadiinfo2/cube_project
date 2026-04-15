const navToggle = document.getElementById('navToggle');
const mainNav = document.getElementById('mainNav');

if (navToggle && mainNav) {
    navToggle.addEventListener('click', () => {
        mainNav.classList.toggle('show');
    });
}

const slides = document.querySelectorAll('.slide');
const dots = document.querySelectorAll('.dot');
let currentSlide = 0;
let autoSlide = null;

function showSlide(index) {
    slides.forEach((slide, i) => {
        slide.classList.remove('active');
        if (dots[i]) dots[i].classList.remove('active');
    });

    if (slides[index]) slides[index].classList.add('active');
    if (dots[index]) dots[index].classList.add('active');

    currentSlide = index;
}

function nextSlide() {
    if (!slides.length) return;
    let next = currentSlide + 1;
    if (next >= slides.length) next = 0;
    showSlide(next);
}

function startSlide() {
    if (!slides.length) return;
    autoSlide = setInterval(nextSlide, 4000);
}

function resetSlide() {
    clearInterval(autoSlide);
    startSlide();
}

if (slides.length) {
    startSlide();

    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            showSlide(index);
            resetSlide();
        });
    });
    window.addEventListener("scroll", function () {
    const header = document.querySelector(".site-header");
    if (window.scrollY > 20) {
        header.classList.add("scrolled");
    } else {
        header.classList.remove("scrolled");
    }
});
}