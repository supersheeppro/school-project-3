// Verkrijg de popup, open- en sluitknoppen
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

