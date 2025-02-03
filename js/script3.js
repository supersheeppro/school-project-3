// Verkrijg elementen voor popup en knoppen
const popup = document.getElementById('popup');
const popup3 = document.getElementById('popup3');
const openPopupBtn = document.querySelector('.game-detail-img');
const closePopupBtn = document.getElementById('closePopupBtn');

try {
    // Voeg event listener toe voor de eerste SVG (svg1)
    document.getElementById("svg1").addEventListener("click", function () {
        try {
            // Verberg svg1 en toon svg2
            document.getElementById("svg2").style.display = "block";
            document.getElementById("svg1").style.display = "none";
        } catch (error) {
            // Log fout als display-stijl niet kan worden gewijzigd
            console.error("Fout bij het wijzigen van de display-stijl voor svg1 of svg2:", error);
        }
    });

    // Voeg event listener toe voor de tweede SVG (svg2)
    document.getElementById("svg2").addEventListener("click", function () {
        try {
            // Verberg svg2 en toon svg1
            document.getElementById("svg2").style.display = "none";
            document.getElementById("svg1").style.display = "block";
        } catch (error) {
            // Log fout als display-stijl niet kan worden gewijzigd
            console.error("Fout bij het wijzigen van de display-stijl voor svg1 of svg2:", error);
        }
    });
} catch (error) {
    // Log fout als er iets misgaat met de event listeners voor svg's
    console.error("Fout bij het toevoegen van event listeners:", error);
}

// Voeg event listener toe voor het tonen en verbergen van het dropdown-menu
document.getElementById("dropdownbtn").addEventListener("click", function (){
    document.getElementById("dropdowncnt").style.display =
        document.getElementById("dropdowncnt").style.display === 'block' ? 'none' : 'block';
});

// Voeg een algemene click-eventlistener toe om het dropdown-menu te sluiten als buiten het menu wordt geklikt
document.addEventListener('click', (event) => {
    if (!document.getElementById("dropdownbtn").contains(event.target) && !document.getElementById("dropdowncnt").contains(event.target)) {
        // Verberg het dropdown-menu als het buiten de knop of het menu wordt geklikt
        document.getElementById("dropdowncnt").style.display = 'none';
    }
});

// Verkrijg de sluitknop en de popup-container voor een extra popup
const button = document.getElementById('close');
const container = document.getElementById('popup2');

// Voeg event listener toe aan de sluitknop voor de extra popup
button.addEventListener('click', function() {
    // Verberg de popup bij klikken op de sluitknop
    container.style.display = 'none';

    // Sla op dat de popup verborgen is in de localStorage
    localStorage.setItem('isHidden', 'true');
});

// Voeg event listener toe voor het openen van de popup bij klikken op een afbeelding
openPopupBtn.addEventListener('click', function() {
    popup.style.display = 'flex';
});

// Voeg event listener toe voor het sluiten van de popup via de sluitknop in de popup
closePopupBtn.addEventListener('click', function() {
    popup.style.display = 'none';
});

// Voeg event listener toe voor het sluiten van de popup als er buiten de popup wordt geklikt
window.addEventListener('click', function(event) {
    if (event.target === popup) {
        popup.style.display = 'none';
    }
});

// Verkrijg de achtergrondafbeelding van het game-cover-element en de src van andere afbeeldingen
let element = document.getElementById("image-game-cover");
let backgroundImage = window.getComputedStyle(element).backgroundImage;
let img0 = "none";
// Extract de URL uit de backgroundImage, verwijder de 'url("")' rond de afbeelding
if (backgroundImage !== "none") {
    img0 = backgroundImage.slice(5, -2);
} else {
    console.log("Geen achtergrondafbeelding ingesteld.");
}

// Verkrijg de src van andere afbeeldingen
let img1 = document.getElementById("image1").src
let img2 = document.getElementById("image2").src

// Log de URL's van de afbeeldingen
console.log(img0, img1, img2,)

// Voeg een event listener toe voor alle optielinks die de afbeelding wijzigen
document.querySelectorAll(".optielink").forEach(optielink => {
    optielink.addEventListener("click", function(event) {
        // Verkrijg de geselecteerde optie
        let data = event.target.getAttribute("data");

        // Pas de afbeelding aan op basis van de geselecteerde optie
        if (data == 0) {
            document.getElementById("image1").src = img1
            document.getElementById("image2").src = img2
            document.getElementById("image-game-cover").style.backgroundImage = `url(${img0})`
        } else if (data == 1) {
            document.getElementById("image1").src = img0
            document.getElementById("image2").src = img2
            document.getElementById("image-game-cover").style.backgroundImage = `url(${img1})`
        } else if (data == 2) {
            document.getElementById("image1").src = img0
            document.getElementById("image2").src = img1
            document.getElementById("image-game-cover").style.backgroundImage = `url(${img2})`
        }

        // Log de geselecteerde optie
        console.log("Geklikte optie:", data);
    });
});

// Voeg een event listener toe voor het openen van de review-popup bij het klikken op de knop
document.getElementById("reviewaddbutton").addEventListener("click", function() {
    document.getElementById("popup3").style.display = "flex"
})

// Voeg een event listener toe voor het sluiten van de review-popup bij het klikken op de sluitknop
document.getElementById("close-popup-button").addEventListener("click", function() {
    document.getElementById("popup3").style.display = "none"
})

// Voeg een event listener toe om de review-popup te sluiten als buiten de popup wordt geklikt
window.addEventListener('click', function(event) {
    if (event.target === popup3) {
        popup3.style.display = 'none';
    }
});
