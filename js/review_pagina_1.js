// Haal de URL-parameters op uit de huidige pagina
const urlParams = new URLSearchParams(window.location.search);
// Verkrijg de waarde van de parameter 'titel'
let titel = urlParams.get('titel');

// Object met PEGI-beoordelingen en bijbehorende afbeeldingspaden
let foto_pegi_lijst = {
    "12":"images/PEGI_12.jpg",
    "18":"images/PEGI_18.jpg",
    "7":"images/PEGI_7.jgp", // Let op: Typfout in de extensie (jgp -> jpg)
    "3":"images/PEGI_3.jpg",
    "16":"images/PEGI_16.jpg"
}

// Object met sterbeoordelingen
let ratings = {
    "1":"★☆☆☆☆",
    "2":"★★☆☆☆",
    "3":"★★★☆☆",
    "4":"★★★★☆",
    "5":"★★★★★"
}

// Informatie over game 1
let game1 = {
    "Titel":"Fortnite Save The World",
    "detail":"Fortnite is een populaire battle royale-game waarin spelers vechten op een eiland tot één winnaar overblijft. Het combineert schieten, bouwen en overleven in kleurrijke omgevingen. Met regelmatige updates, samenwerkingen en verschillende spelmodi blijft het geliefd bij gamers wereldwijd.",
    "imagegamecover":"images/fortnite-savetheworld-cover.jpeg",
    "rating":ratings["2"], // Beoordeling van game 1
    "pegi" : foto_pegi_lijst["12"], // PEGI afbeelding voor game 1
    "opties": ["Save The World", "Battle Royale", "Lego Fortnite"], // Beschikbare opties voor game 1
    "prijs": "€39,99", // Prijs van game 1
    "imagegamecover2":"images/fortnite-battle-royale-cover.jpeg", // Tweede afbeelding van game 1
    "imagegamecover3":"images/fortnite-lego-cover.jpeg", // Derde afbeelding van game 1
}

// Informatie over game 2
let game2 = {
    "Titel":"Ark",
    "detail":"ARK: Survival Evolved is een open-wereld survivalgame waarin spelers zich in een prehistorische omgeving bevinden, vol met dinosaurussen, mythische wezens en gevaren. Je begint gestrande en zonder uitrusting op een mysterieus eiland genaamd ARK, waar overleven de belangrijkste uitdaging is.",
    "imagegamecover":"images/ark-cover.webp",
    "rating":ratings["5"], // Beoordeling van game 2
    "pegi" : foto_pegi_lijst["16"], // PEGI afbeelding voor game 2
    "opties": ["Survival Evolved", "Survival Ascended"], // Beschikbare opties voor game 2
    "prijs": "€14,79", // Prijs van game 2
    "imagegamecover2":"images/ark-cover2.jpg", // Tweede afbeelding van game 2
    "imagegamecover3":"images/ark-cover3.jpg", // Derde afbeelding van game 2
}

// Informatie over game 3
let game3 = {
    "Titel":"Minecraft Java / Bedrock",
    "detail":"Minecraft is een creatief sandbox-spel waarin spelers een wereld van blokken verkennen, bouwen en overleven. Het biedt verschillende spelmodi, zoals Survival, Creative en Adventure, en laat spelers onbeperkt bouwen en ontdekken in een procedureel gegenereerde wereld met biomen, vijanden en dimensies. Dankzij de grote vrijheid, een actieve gemeenschap en educatieve toepassingen is Minecraft geschikt voor alle leeftijden en blijft het wereldwijd populair.",
    "imagegamecover":"images/minecraft-breed.webp",
    "rating":ratings["4"], // Beoordeling van game 3
    "pegi" : foto_pegi_lijst["7"], // PEGI afbeelding voor game 3
    "opties": ["Java & Bedrock Edition", "Legends", "Dungeons"], // Beschikbare opties voor game 3
    "prijs": "€29,99", // Prijs van game 3
    "imagegamecover2":"images/minecraft-legends.jpg", // Tweede afbeelding van game 3
    "imagegamecover3":"images/minecraft-dungeons.jpg", // Derde afbeelding van game 3
}

// Informatie over game 4
let game4 = {
    "Titel":"The Forest",
    "detail":"The Forest is een survival-horror game waarin spelers een mysterieus eiland verkennen na een vliegtuigcrash. Je neemt de rol aan van een overlevende die zijn zoon probeert te redden terwijl je geconfronteerd wordt met een gevaarlijke omgeving en kannibalistische mutanten. De game biedt zowel een boeiende singleplayer-ervaring als een coöperatieve multiplayer-modus.",
    "imagegamecover":"images/theforest-breed.jpg",
    "rating":ratings["4"], // Beoordeling van game 4
    "pegi" : foto_pegi_lijst["18"], // PEGI afbeelding voor game 4
    "opties": ["The Forest"], // Beschikbare opties voor game 4
    "prijs": "€16,79", // Prijs van game 4
    "imagegamecover2":"images/theforest-cover.jpg", // Tweede afbeelding van game 4
    "imagegamecover3":"images/theforest-cover2.jpg", // Derde afbeelding van game 4
}

// Switch statement om de juiste game-informatie weer te geven op basis van de titel
switch (titel) {
    case game1["Titel"]:
        // Vul de pagina met informatie van game 1
        document.getElementById("pagina_titel").innerHTML = game1["Titel"];
        document.getElementById("pagina_detail").innerHTML = game1["detail"];
        document.getElementById("image-game-cover-cover").innerHTML = `<img src="${game1["imagegamecover2"]}">`;
        document.getElementById("image-game-cover-cover2").innerHTML = `<img src="${game1["imagegamecover3"]}">`;
        document.getElementById("image-game-cover").style.backgroundImage = `url(${game1["imagegamecover"]})`;
        document.getElementById("rating").innerHTML =  game1["rating"];
        document.getElementById("pegirating").innerHTML =  `<img src="${game1["pegi"]}">`;
        document.getElementById("prijs").innerHTML =  game1["prijs"];
        // Voeg opties toe aan de dropdown
        for (let optie of game1["opties"]) {
            document.getElementById("dropdowncnt").innerHTML += `<a>${optie}</a>`;
        }
        console.log(game1["Titel"]); // Log de titel van game 1
        break;

    case game2["Titel"]:
        // Vul de pagina met informatie van game 2
        document.getElementById("pagina_titel").innerHTML = game2["Titel"];
        document.getElementById("pagina_detail").innerHTML = game2["detail"];
        document.getElementById("image-game-cover-cover").innerHTML = `<img src="${game2["imagegamecover2"]}">`;
        document.getElementById("image-game-cover-cover2").innerHTML = `<img src="${game2["imagegamecover3"]}">`;
        document.getElementById("image-game-cover").style.backgroundImage = `url(${game2["imagegamecover"]})`;
        document.getElementById("rating").innerHTML =  game2["rating"];
        document.getElementById("pegirating").innerHTML =  `<img src="${game2["pegi"]}">`;
        document.getElementById("prijs").innerHTML =  game2["prijs"];
        // Voeg opties toe aan de dropdown
        for (let optie of game2["opties"]) {
            document.getElementById("dropdowncnt").innerHTML += `<a>${optie}</a>`;
        }
        console.log(game2["Titel"]); // Log de titel van game 2
        break;

    case game3["Titel"]:
        // Vul de pagina met informatie van game 3
        document.getElementById("pagina_titel").innerHTML = game3["Titel"];
        document.getElementById("pagina_detail").innerHTML = game3["detail"];
        document.getElementById("image-game-cover-cover").innerHTML = `<img src="${game3["imagegamecover2"]}">`;
        document.getElementById("image-game-cover-cover2").innerHTML = `<img src="${game3["imagegamecover3"]}">`;
        document.getElementById("image-game-cover").style.backgroundImage = `url(${game3["imagegamecover"]})`;
        document.getElementById("rating").innerHTML =  game3["rating"];
        document.getElementById("pegirating").innerHTML =  `<img src="${game3["pegi"]}">`;
        document.getElementById("prijs").innerHTML =  game3["prijs"];
        // Voeg opties toe aan de dropdown
        for (let optie of game3["opties"]) {
            document.getElementById("dropdowncnt").innerHTML += `<a>${optie}</a>`;
        }
        console.log(game3["Titel"]); // Log de titel van game 3
        break;

    case game4["Titel"]:
        // Vul de pagina met informatie van game 4
        document.getElementById("pagina_titel").innerHTML = game4["Titel"];
        document.getElementById("pagina_detail").innerHTML = game4["detail"];
        document.getElementById("image-game-cover-cover").innerHTML = `<img src="${game4["imagegamecover2"]}">`;
        document.getElementById("image-game-cover-cover2").innerHTML = `<img src="${game4["imagegamecover3"]}">`;
        document.getElementById("image-game-cover").style.backgroundImage = `url(${game4["imagegamecover"]})`;
        document.getElementById("rating").innerHTML =  game4["rating"];
        document.getElementById("pegirating").innerHTML =  `<img src="${game4["pegi"]}">`;
        document.getElementById("prijs").innerHTML =  game4["prijs"];
        // Voeg opties toe aan de dropdown
        for (let optie of game4["opties"]) {
            document.getElementById("dropdowncnt").innerHTML += `<a>${optie}</a>`;
        }
        console.log(game4["Titel"]); // Log de titel van game 4
        break;

    default:
        // Standaardactie als geen van de games overeenkomt
        document.getElementById("pagina_titel").innerHTML = "Gamestars"; // Standaard titel
        document.getElementById("pagina_detail").innerHTML = "Gamestars"; // Standaard detail
        console.log("Err: geen game getoont"); // Log een foutmelding
        break;
}