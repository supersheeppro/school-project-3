const images = [
    "../images/skull_and_bones.jpg",
    "../images/red_dead_slide.jpg",
    "../images/spider_man.jpg",
    "../images/fortnite.jpg",
    "../images/far_cry.jpg"
];

let currentImageIndex = 0;

function changeBackground() {
    // Bereken de volgende afbeelding
    const nextImageIndex = (currentImageIndex + 1) % images.length;

    // Pak het slideshow-element
    const slideshow = document.querySelector('.content-slideshow');

    // Stel de volgende afbeelding in op ::after
    slideshow.style.setProperty('--next-slideshow-bg', `url("${images[nextImageIndex]}")`);

    // Start de fade-in: de ::after wordt zichtbaar
    slideshow.classList.add('fade-in');

    // Na 1.5 seconden (transitieduur), wissel de actieve afbeelding
    setTimeout(() => {
        slideshow.style.setProperty('--slideshow-bg', `url("${images[nextImageIndex]}")`);
        slideshow.classList.remove('fade-in');
        currentImageIndex = nextImageIndex; // Update de huidige index
    }, 1500); // Moet overeenkomen met de `transition`-tijd in CSS
}

// Start de slideshow
setInterval(changeBackground, 5000); // Elke 5 seconden
