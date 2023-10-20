// JavaScript para controlar el carrusel
const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');
const carousel = document.querySelector('.carousel');

let currentIndex = 0;

nextBtn.addEventListener('click', () => {
    if (currentIndex < carousel.children.length - 3) {
        currentIndex++;
    } else {
        currentIndex = 0; // Volver al inicio si estamos en la última imagen.
    }
    updateCarousel();
});

prevBtn.addEventListener('click', () => {
    if (currentIndex > 0) {
        currentIndex--;
    } else {
        currentIndex = carousel.children.length - 3; // Ir a la última imagen si estamos en la primera.
    }
    updateCarousel();
});

function updateCarousel() {
    const itemWidth = carousel.children[0].offsetWidth;
    carousel.style.transform = `translateX(-${currentIndex * itemWidth}px)`;
}

    