document.addEventListener('DOMContentLoaded', function() {
    const carousel = document.querySelector('#carouselOne');
    const divs = document.querySelectorAll('#word-emphasis-carousel div');

    // Función para actualizar las clases de los spans según el slide activo
    const updateSpans = (activeIndex) => {
        divs.forEach((div, index) => {
            if (index === activeIndex) {
                div.classList.add('activeCarousel');
                div.classList.remove('text-secondary');
            } else {
                div.classList.remove('activeCarousel');
                div.classList.add('text-secondary');
            }
        });
    };

    // Escuchar el evento 'slid.bs.carousel' para detectar el cambio de diapositiva
    carousel.addEventListener('slid.bs.carousel', function(event) {
        const activeIndex = event.to; // Obtiene el índice de la diapositiva activa
        updateSpans(activeIndex);
    });
});