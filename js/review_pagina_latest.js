document.addEventListener("DOMContentLoaded", () => {
    // Selecteer de slideshow container en de individuele slides
    const slideshow = document.querySelector(".slideshow");
    const slides = document.querySelectorAll(".review-slide");

    // Selecteer de navigatieknoppen
    const prevButton = document.querySelector(".prev");
    const nextButton = document.querySelector(".next");

    let currentIndex = 0; // Huidige actieve slide-index
    const intervalTime = 7000; // Intervaltijd voor automatisch overschakelen (7 seconden)

    // Functie om de positie van de slides bij te werken
    function updateSlidePosition() {
        // Verschuif de slideshow door de huidige index
        slideshow.style.transform = `translateX(-${currentIndex * 100}%)`;
    }

    // Functie om naar de volgende slide te gaan
    function showNextSlide() {
        // Verhoog de index en ga terug naar 0 als de laatste slide bereikt is
        currentIndex = (currentIndex + 1) % slides.length;
        updateSlidePosition();
    }

    // Handmatige navigatie met de "volgende" knop
    nextButton.addEventListener("click", () => {
        showNextSlide(); // Toon de volgende slide
        resetAutoSlide(); // Reset de automatische slide-timer
    });

    // Handmatige navigatie met de "vorige" knop
    prevButton.addEventListener("click", () => {
        // Verminder de index en ga terug naar de laatste slide als de index negatief wordt
        currentIndex = (currentIndex - 1 + slides.length) % slides.length;
        updateSlidePosition(); // Werk de positie van de slides bij
        resetAutoSlide(); // Reset de automatische slide-timer
    });

    // Start een automatische navigatie door slides
    let autoSlide = setInterval(showNextSlide, intervalTime);

    // Functie om de automatische slide-timer te resetten
    function resetAutoSlide() {
        clearInterval(autoSlide); // Stop de huidige timer
        autoSlide = setInterval(showNextSlide, intervalTime); // Start een nieuwe timer
    }
});
