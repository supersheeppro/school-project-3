const urlParams = new URLSearchParams(window.location.search); // Initialize URL parameters from the current page's query string
let titel = urlParams.get('titel'); // Retrieve the game title from the URL parameters

// Object mapping PEGI ratings to corresponding images
let foto_pegi_lijst = {
    "12": "images/PEGI_12.jpg",
    "18": "images/PEGI_18.jpg",
    "7": "images/PEGI_7.jpg",
    "16": "images/PEGI_16.jpg",
    "3": "images/PEGI_3.jpg"
};

// Object mapping star ratings to their visual representation
let ratings = {
    "1": "★☆☆☆☆",
    "2": "★★☆☆☆",
    "3": "★★★☆☆",
    "4": "★★★★☆",
    "5": "★★★★★"
};

// Object containing details of various games
games = {
    'game1': {
        "Titel": "Red Dead Redemption II",
        "detail": "Red Dead Redemption 2 is een actie-avonturengame waarin spelers een uitgestrekte, realistische open wereld verkennen in het Wilde Westen. Als Arthur Morgan, lid van de Van der Linde-bende, bepaal je met jouw keuzes het lot van de groep. De game biedt jagen, vissen, paardrijden en missies, gecombineerd met een meeslepend verhaal en dynamische interacties. Dankzij adembenemende graphics en diepe thema's blijft het een favoriet onder liefhebbers van realistische en verhaalgedreven games.",
        "imagegamecover1": "images/red-dead-redemption-2-cover1.avif",
        "pegi": 18, // PEGI rating for the game
        "opties": ["Read Dead Redemption II", "Read Dead Online", "Read Dead Redemption I"],
        "prijs": "€59,99",
        "imagegamecover3": "images/red-dead-redemption-2-cover2.avif",
        "imagegamecover2": "images/red-dead-redemption-2-cover3.jpg",
        "video": "https://www.youtube.com/embed/gmA6MrX81z4?si=VO_5xvp6TGywS5S-",
        "reviews": {
            "Luca Veenstra": {
                "date": "aug 14, 2024",
                "description": "Red Dead Redemption II is zonder twijfel een meesterwerk. De aandacht voor detail in de open wereld is verbluffend; van de adembenemende landschappen tot de authentieke interacties. De verhaallijn wist me volledig mee te slepen, en de keuzes die je maakt hebben echte impact op het verloop van het spel. Het jagen, vissen en paardrijden voegen een realistische dimensie toe, terwijl de dynamische wereld vol leven zit. Mijn enige kritiekpunt is dat de besturing af en toe wat log aanvoelt, maar dat wordt ruimschoots gecompenseerd door de meeslepende ervaring. Zeker een aanrader!",
                "stars": 5,
                "profileimage": "images/profile_default.jpg",
            },
            "Eva Smits": {
                "date": "sept 2, 2024",
                "description": "Deze game is fantastisch! Ik ben helemaal onder de indruk van hoe realistisch de wereld is. Van de dynamiek in het weer tot de manier waarop de NPC's zich gedragen, alles voelt zo levensecht. De diepgang van het verhaal en de keuzes die je kunt maken zorgen ervoor dat je volledig opgaat in de game. Ik kan niet stoppen met spelen, elke missie is een nieuwe uitdaging. Dit is zeker één van de beste games van deze generatie!",
                "stars": 5,
                "profileimage": "images/profile_default.jpg",
            },
            "Maxim De Jong": {
                "date": "okt 10, 2024",
                "description": "Red Dead Redemption II is een van de mooiste games die ik ooit heb gespeeld. De wereld is enorm, maar voelt toch dicht en levendig aan. De complexiteit van het verhaal en de variëteit aan activiteiten, van vechten tot vissen, zorgen voor een verslavende ervaring. De enige reden waarom ik 4 sterren geef, is dat het soms wat traag aanvoelt, maar dat doet niets af aan de algehele ervaring.",
                "stars": 4,
                "profileimage": "images/profile_default.jpg",
            }
        },
        "genre": "Actiespel, avonturenspel, open-wereldspel, westerngame",
        "platforms": {
            "PlayStation": "PlayStation 4 (PS4) Speelbaar op PlayStation 5 (PS5) via backward compatibility",
            "Xbox": "Xbox One Xbox Series X en Series S (via backward compatibility)",
            "PC": "Windows (via platforms zoals Steam, Epic Games Store, en Rockstar Games Launcher)",
            "Google Stadia": " Het spel was beschikbaar via Google Stadia, maar dit platform is in januari 2023 beëindigd",
        },
        "maker": "Red Dead Redemption 2 is ontwikkeld door Rockstar Games, een wereldberoemde gameontwikkelaar en uitgever. Specifieker: Ontwikkelaar: Rockstar Studios, een samenwerkingsverband tussen meerdere Rockstar-studio's wereldwijd, waaronder Rockstar North (Verenigd Koninkrijk), Rockstar San Diego (VS), en andere teams in bijvoorbeeld Toronto, India, en Leeds. Uitgever: Rockstar Games, het moederbedrijf dat verantwoordelijk is voor de distributie en marketing van de game. Rockstar Games staat bekend om hun expertise in open-wereldspellen en is ook verantwoordelijk voor andere iconische titels zoals de Grand Theft Auto (GTA)-serie.",
    },

    'game2': {
        "Titel": "Assassin's Creed",
        "detail": "The Forest is een survival-horror game waarin spelers een mysterieus eiland verkennen na een vliegtuigcrash. Je neemt de rol aan van een overlevende die zijn zoon probeert te redden terwijl je geconfronteerd wordt met een gevaarlijke omgeving en kannibalistische mutanten. De game biedt zowel een boeiende singleplayer-ervaring als een coöperatieve multiplayer-modus.",
        "imagegamecover1": "images/assasins_creed-cover.jpg",
        "pegi": 18,
        "opties": ["Assasins Creed I", "Assasins Creed Odyssey", "Assasins Creed II"],
        "prijs": "€19,99",
        "imagegamecover2": "images/assasins_creed-cover2.jpg",
        "imagegamecover3": "images/assasins_creed-cover3.jpg",
        "video": "https://www.youtube.com/embed/RjQ6ZtyXoA0?si=ibYz8Ewb76ocwzNC",
        "reviews": {
            "Liam Bakkers": {
                "date": "aug 14, 2024",
                "description": "Assassin's Creed is een spannende ervaring die geschiedenis en actie op briljante wijze combineert. De open wereld en de manier waarop je de omgeving kunt verkennen, zorgt ervoor dat je je een echte assassin voelt. De parkour-mechanismen zijn vloeiend, en het verhaal is meeslepend. Wat ik het meest waardeer, is de vrijheid die de game biedt, je kunt het spel op verschillende manieren spelen, afhankelijk van je speelstijl. Het enige minpunt is dat de missies soms repetitief aanvoelen, maar dit wordt gecompenseerd door de boeiende setting en het meeslepende verhaal.",
                "stars": 4,
                "profileimage": "images/profile_default.jpg",
            },
            "Sophie Janssen": {
                "date": "sept 5, 2024",
                "description": "Assassin's Creed is één van mijn favoriete series. Het combineren van stealth, actie en parkour is briljant en zorgt voor een verfrissende ervaring. Het is zo leuk om door de stad te rennen en over de daken te springen, terwijl je ook interessante historische verhalen ontdekt. De gevechten zijn dynamisch en het verhaal is goed geschreven. Het enige dat ik zou willen verbeteren, is de AI van de vijanden die soms voorspelbaar is.",
                "stars": 4,
                "profileimage": "images/profile_default.jpg",
            },
            "Tommy De Vries": {
                "date": "okt 1, 2024",
                "description": "Als je van geschiedenis houdt, dan is Assassin's Creed de perfecte game. Je krijgt de kans om beroemde historische steden en gebeurtenissen te verkennen, terwijl je meeslepende avonturen beleeft. De open wereld is geweldig en er is altijd wel iets te doen. De game heeft echter soms wat technische problemen, zoals lange laadtijden, maar deze zijn te verwaarlozen in vergelijking met de algehele ervaring.",
                "stars": 4,
                "profileimage": "images/profile_default.jpg",
            },
            "Nina Koster": {
                "date": "nov 14, 2024",
                "description": "Assassin's Creed biedt een geweldige mix van actie, avontuur en geschiedenis. De wereld is enorm en voelt levendig aan. Ik hou van de vrijheid die het spel biedt; je kunt de wereld verkennen, missies voltooien of gewoon genieten van de prachtige landschappen. De besturing voelt een beetje stroef aan bij de gevechten, maar dat is het enige nadeel in wat verder een uitstekende game is.",
                "stars": 4,
                "profileimage": "images/profile_default.jpg",
            }
        },
        "genre": "Actiespel, Avonturenspel, Stealth, Open-wereldspel",
        "platforms": {
            "PlayStation": "PlayStation 3 (PS3) Niet direct beschikbaar op PlayStation 4 (PS4) of PlayStation 5 (PS5), maar mogelijk via streamingdiensten zoals PlayStation Now (als ondersteund).",
            "Xbox": "Xbox 360 Xbox One (via backward compatibility) Xbox Series X en Series S (via backward compatibility van de Xbox 360-versie)",
            "PC": "Windows (via platforms zoals Steam, Ubisoft Connect, en andere digitale winkels)",
            "Cloud Gaming": "De game kan beschikbaar zijn via diensten zoals GeForce Now of andere cloud-platformen, afhankelijk van regionale beschikbaarheid.",
        },
        "maker": "Assassin's Creed 1 is ontwikkeld door Ubisoft, een gerenommeerde gameontwikkelaar en uitgever. Specifieker: Ontwikkelaar: Ubisoft Montreal, met ondersteuning van andere Ubisoft-studio's wereldwijd, waaronder Ubisoft Annecy en Ubisoft Bucharest. Uitgever: Ubisoft, dat verantwoordelijk is voor de distributie en marketing van de game. Ubisoft staat bekend om hun expertise in het maken van meeslepende open-wereldspellen en is ook verantwoordelijk voor andere iconische series zoals Far Cry en Watch Dogs.",
    }
}

// Prompt the user for their age
let leeftijd = prompt("Hoe oud ben je?"); // Ask the user for their age

// Loop through games and match the titel
for (let key in games) {
    if (games[key]["Titel"] === titel) {
        let game = games[key];
        let reviews = game.reviews;

        let totaalSterren = 0;
        let aantalReviews = Object.keys(reviews).length;
        let gemiddeldeSterren = 0;

        if (aantalReviews > 0) {
            for (let reviewer in reviews) {
                totaalSterren += reviews[reviewer].stars; // Sum the stars from each review
            }
            gemiddeldeSterren = Math.round(totaalSterren / aantalReviews); // Calculate the average stars
            document.getElementById("reviewscount").innerText = `${aantalReviews} Reviews`; // Update review count in the DOM
        }

        // Check if the user is old enough for the game
        if (game["pegi"] >= leeftijd) {
            document.getElementById("popup2").style.display = "block"; // Show age restriction popup
            console.log("user is te jong") // Log message for underage user
        }

        // Update the page with game details
        document.getElementById("pagina_titel").innerHTML = game["Titel"];
        document.getElementById("pagina_detail").innerHTML = game["detail"];
        document.getElementById("image-game-cover-cover").innerHTML = `<img id="image1" src="${game["imagegamecover2"]}">`;
        document.getElementById("image-game-cover-cover2").innerHTML = `<img id="image2" src="${game["imagegamecover3"]}">`;
        document.getElementById("image-game-cover").style.backgroundImage = `url(${game["imagegamecover1"]})`;
        document.getElementById("rating").innerHTML = ratings[gemiddeldeSterren];
        document.getElementById("pegirating").innerHTML = `<img src="${foto_pegi_lijst[game["pegi"]]}">`;
        document.getElementById("item-game-detail-genre").innerHTML = `<h1>Genre</h1><p>${game["genre"]}</p>`;

        const container = document.getElementById("item-game-detail-platforms");
        let platformsHTML = '<h1>Platforms</h1>';
        for (const title in game["platforms"]) {
            if (game["platforms"].hasOwnProperty(title)) {
                const detail = game["platforms"][title];
                platformsHTML += `
                        <div class="platform">
                            <h4> &bull; ${title}</h4> <p>${detail}</p>
                        </div>
                    `;
            }
        }
        platformsHTML += '</div>';
        container.innerHTML = platformsHTML;

        document.getElementById("item-game-detail-maker").innerHTML = `<h1>Maker</h1><p>${game["maker"]}</p>`;
        document.getElementById("prijs").innerHTML = game["prijs"];
        document.getElementById("video").src = game["video"];

        // Populate dropdown options for the game
        game["opties"].forEach((optie, index) => {
            document.getElementById("dropdowncnt").innerHTML += `<a class="optielink" data="${index}">${optie}</a>`;
        });

        // Display reviews for the game
        for (let [reviewerName, reviewDetails] of Object.entries(game.reviews)) {
            let reviewcontainer = document.createElement("div");
            reviewcontainer.classList.add("reviewappendcontainer");
            reviewcontainer.innerHTML = `
                    <img class="profileimage" src="${reviewDetails.profileimage}">
                    <div class="profileinfo">
                        <h4>${reviewerName}</h4>
                        <p class="date">${reviewDetails.date}</p>
                        <p class="stars">${ratings[reviewDetails.stars]}</p>
                    </div>
                    <p>${reviewDetails.description}</p>
                `;
            document.getElementById("reviews-container").append(reviewcontainer);
        }
        break; // Exit the loop once the game is found
    }
}
