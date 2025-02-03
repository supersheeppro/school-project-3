// Array met 5 afbeeldingen
let fotos = [
    "images/ark-cover2.jpg",
    "images/assasins_creed-cover2.jpg",
    "images/far-cry4-cover.jpg",
    "images/flight_simulator-cover1.jpg",
    "images/red-dead-redemption-2-cover1.avif",
];

// Variabelen voor slideshow
let currentIndex = 0;
const slideshowImage = document.getElementById("slideshow");

// Functie om de afbeelding te veranderen
function changeImage() {
    slideshowImage.src = fotos[currentIndex];
    currentIndex = (currentIndex + 1) % fotos.length; // Loopt door de array heen
}

// Start de slideshow (verandert elke 2,5 seconden)
setInterval(changeImage, 2500);

// Functie om een afbeelding toe te voegen via file input
document.getElementById("imageUpload").addEventListener("change", function(event) {
    let file = event.target.files[0];

    if (file) {
        let reader = new FileReader();
        reader.onload = function(e) {
            fotos.push(e.target.result); // Voeg het bestand toe als een base64-string
            alert("Afbeelding toegevoegd!");
        };
        reader.readAsDataURL(file);
    }
});

function openPrompt() {
    let filePath = prompt("Voer het pad van de afbeelding in:");
    if (filePath) {
        if (!fotos.includes(filePath)) {
            fotos.push(filePath);
            alert("Afbeelding toegevoegd aan de lijst!");
        }
        let imgElement = document.getElementById("imageDisplay");
        imgElement.src = filePath;
        imgElement.style.display = "block";
    }
}