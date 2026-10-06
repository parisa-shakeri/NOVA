// Get all slider items
const slider = document.querySelector(".sliderItems");

if (slider) {

    const slides = slider.children;
    const sliderDots = document.querySelector(".sliderDots");

    // Create dots
    for (let i = 0; i < slides.length; i++) {

        const dot = document.createElement("div");
        dot.classList.add("dot");
        sliderDots.appendChild(dot);

        dot.addEventListener("click", function () {
            index = i;
            showSlide();
        });
    }

    if (sliderDots.children[0]) {
        sliderDots.children[0].classList.add("active");
    }

    const next = document.querySelector(".next");
    const prev = document.querySelector(".prev");
    const totalSlider = slides.length;

    let index = 0;
    let autoSlide;

    if (next) {
        next.addEventListener("click", function () {
            slide("next");
        });
    }

    if (prev) {
        prev.addEventListener("click", function () {
            slide("prev");
        });
    }

    function slide(direction) {

        if (direction === "next") {
            index = (index === totalSlider - 1) ? 0 : index + 1;
        }

        if (direction === "prev") {
            index = (index === 0) ? totalSlider - 1 : index - 1;
        }

        showSlide();
    }

    function showSlide() {

        for (let i = 0; i < slides.length; i++) {
            slides[i].classList.remove("ac");
        }

        slides[index].classList.add("ac");

        for (let i = 0; i < sliderDots.children.length; i++) {
            sliderDots.children[i].classList.remove("active");
        }

        sliderDots.children[index].classList.add("active");
    }

    showSlide();

    // Auto slide every 4 seconds
    function startAutoSlide() {
        autoSlide = setInterval(function () {
            slide("next");
        }, 4000);
    }

    function stopAutoSlide() {
        clearInterval(autoSlide);
    }

    startAutoSlide();

    // Pause on hover
    slider.addEventListener("mouseenter", stopAutoSlide);
    slider.addEventListener("mouseleave", startAutoSlide);

    // Pause when tab is hidden
    document.addEventListener("visibilitychange", function () {
        if (document.hidden) {
            stopAutoSlide();
        } else {
            startAutoSlide();
        }
    });
}