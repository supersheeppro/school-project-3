// Array met de paden naar de afbeeldingen voor de achtergrondslideshow
const images = [
    "../images/skull_and_bones.jpg",
    "../images/red_dead_slide.jpg",
    "../images/spider_man.jpg",
    "../images/fortnite.jpg",
    "../images/far_cry.jpg"
];

// Huidige index van de afbeelding die zichtbaar is
let currentImageIndex = 0;

// Functie die de achtergrond van de slideshow verandert
function changeBackground() {
    // Bepaal de index van de volgende afbeelding (cirkelt door de lijst)
    const nextImageIndex = (currentImageIndex + 1) % images.length;
    
    // Selecteer het slideshow-element
    const slideshow = document.querySelector('.content-slideshow');

    // Stel de CSS-variable in voor de volgende achtergrondafbeelding
    slideshow.style.setProperty('--next-slideshow-bg', `url("${images[nextImageIndex]}")`);

    // Voeg de 'fade-in' klasse toe om de overgang visueel te laten gebeuren
    slideshow.classList.add('fade-in');

    // Na 1.5 seconden (de duur van de fade-in), werk de achtergrondafbeelding bij
    setTimeout(() => {
        // Stel de CSS-variable in voor de actieve achtergrondafbeelding
        slideshow.style.setProperty('--slideshow-bg', `url("${images[nextImageIndex]}")`);
        
        // Verwijder de 'fade-in' klasse om de overgang te voltooien
        slideshow.classList.remove('fade-in');
        
        // Werk de huidige index bij naar de volgende afbeelding
        currentImageIndex = nextImageIndex;
    }, 1500); // 1500 milliseconden = 1,5 seconden
}

// Stel in dat de achtergrond elke 5 seconden wordt veranderd
setInterval(changeBackground, 5000);
