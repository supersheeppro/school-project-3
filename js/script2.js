// Verkrijg de popup, open- en sluitknoppen
const popup = document.getElementById('popup');
const openPopupBtn = document.querySelector('.game-detail-img');
const closePopupBtn = document.getElementById('closePopupBtn');

try {
    // Voeg een event listener toe voor de eerste SVG (svg1)
    document.getElementById("svg1").addEventListener("click", function () {
        try {
            // Maak svg2 zichtbaar en verberg svg1
            document.getElementById("svg2").style.display = "block";
            document.getElementById("svg1").style.display = "none";
        } catch (error) {
            // Foutafhandeling voor het wijzigen van de display-stijl van de SVG-elementen
            console.error("Fout bij het wijzigen van de display-stijl voor svg1 of svg2:", error);
        }
    });

    // Voeg een event listener toe voor de tweede SVG (svg2)
    document.getElementById("svg2").addEventListener("click", function () {
        try {
            // Maak svg2 onzichtbaar en toon svg1
            document.getElementById("svg2").style.display = "none";
            document.getElementById("svg1").style.display = "block";
        } catch (error) {
            // Foutafhandeling voor het wijzigen van de display-stijl van de SVG-elementen
            console.error("Fout bij het wijzigen van de display-stijl voor svg1 of svg2:", error);
        }
    });
} catch (error) {
    // Foutafhandeling voor het toevoegen van event listeners
    console.error("Fout bij het toevoegen van event listeners:", error);
}

// Voeg een event listener toe voor de dropdown-knop
document.getElementById("dropdownbtn").addEventListener("click", function (){
    // Wissel de zichtbaarheid van het dropdown-menu bij het klikken op de knop
    document.getElementById("dropdowncnt").style.display =
        document.getElementById("dropdowncnt").style.display === 'block' ? 'none' : 'block';
});

// Voeg een algemene click-eventlistener toe om de dropdown te sluiten als buiten de dropdown wordt geklikt
document.addEventListener('click', (event) => {
    if (!document.getElementById("dropdownbtn").contains(event.target) && !document.getElementById("dropdowncnt").contains(event.target)) {
        // Verberg het dropdown-menu als er buiten de knop en het menu wordt geklikt
        document.getElementById("dropdowncnt").style.display = 'none';
    }
});

// Verkrijg de sluitknop en het container-element voor de popup
const button = document.getElementById('close');
const container = document.getElementById('popup2');

// Voeg een event listener toe aan de sluitknop van de popup
button.addEventListener('click', function() {
    // Verberg de popup bij het klikken op de sluitknop
    container.style.display = 'none';

    // Sla op dat de popup verborgen is in de localStorage
    localStorage.setItem('isHidden', 'true');
});

// Voeg een event listener toe voor het openen van de popup bij het klikken op een afbeelding
openPopupBtn.addEventListener('click', function() {
    popup.style.display = 'flex';
});

// Voeg een event listener toe om de popup te sluiten bij het klikken op de sluitknop binnen de popup
closePopupBtn.addEventListener('click', function() {
    popup.style.display = 'none';
});

// Voeg een event listener toe voor het sluiten van de popup als buiten de popup wordt geklikt
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
