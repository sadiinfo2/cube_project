document.addEventListener("DOMContentLoaded", function () {
    const slides = document.querySelectorAll(".hero-slide");
    const dots = document.querySelectorAll(".dot");
    let current = 0;
    let interval;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.classList.toggle("active", i === index);
        });

        dots.forEach((dot, i) => {
            dot.classList.toggle("active", i === index);
        });

        current = index;
    }

    function nextSlide() {
        let next = current + 1;
        if (next >= slides.length) next = 0;
        showSlide(next);
    }

    function startSlider() {
        interval = setInterval(nextSlide, 4000);
    }

    function resetSlider() {
        clearInterval(interval);
        startSlider();
    }

    dots.forEach((dot, index) => {
        dot.addEventListener("click", function () {
            showSlide(index);
            resetSlider();
        });
    });

    showSlide(0);
    startSlider();

    const revealItems = document.querySelectorAll(".reveal, .fade-up");

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("show");
            }
        });
    }, { threshold: 0.15 });

    revealItems.forEach((item) => observer.observe(item));
});