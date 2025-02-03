// Haal de URL-parameters op uit de huidige pagina
const urlParams = new URLSearchParams(window.location.search);
// Verkrijg de waarde van de parameter 'titel'
let titel = urlParams.get('titel');

// Object met PEGI-beoordelingen en bijbehorende afbeeldingspaden
let foto_pegi_lijst = {
    "12":"images/PEGI_12.jpg",
    "18":"images/PEGI_18.jpg",
    "7":"images/PEGI_7.jpg",
    "16":"images/PEGI_16.jpg",
    "3":"images/PEGI_3.jpg"
}

// Object met sterbeoordelingen
let ratings = {
    "1":"★☆☆☆☆",
    "2":"★★☆☆☆",
    "3":"★★★☆☆",
    "4":"★★★★☆",
    "5":"★★★★★"
}

// Object met informatie over verschillende games
games = {
    'game1' : {
        "Titel":"Read Dead Redemption II", // Titel van game 1
        "detail":"Red Dead Redemption 2 is een actie-avonturengame waarin spelers een uitgestrekte, realistische open wereld verkennen in het Wilde Westen. Als Arthur Morgan, lid van de Van der Linde-bende, bepaal je met jouw keuzes het lot van de groep. De game biedt jagen, vissen, paardrijden en missies, gecombineerd met een meeslepend verhaal en dynamische interacties. Dankzij adembenemende graphics en diepe thema's blijft het een favoriet onder liefhebbers van realistische en verhaalgedreven games.",
        "imagegamecover":"images/red-dead-redemption-2-cover1.avif", // Hoofdfoto van game 1
        "pegi" : foto_pegi_lijst["18"], // PEGI afbeelding voor game 1
        "opties": ["Read Dead Redemption I", "Read Dead Redemption II", "Read Dead Online"], // Beschikbare opties voor game 1
        "prijs": "€59,99", // Prijs van game 1
        "imagegamecover3":"images/red-dead-redemption-2-cover2.avif", // Tweede afbeelding van game 1
        "imagegamecover2":"images/red-dead-redemption-2-cover3.jpg", // Derde afbeelding van game 1
        "reviews": { // Reviews voor game 1
            "Jhon doe": {
                "date": "aug 14, 2024", // Datum van de review
                "description": "good but simple and creative game", // Beschrijving van de review
                "stars": 2, // Sterbeoordeling
                "profileimage": "images/profile_default.jpg", // Profielafbeelding van de reviewer
            },
            "Jhon doe2": {
                "date": "aug 14, 2024",
                "description": "good but simple and creative game",
                "stars": 2,
                "profileimage": "images/profile_default.jpg",
            }
        }
    },
    'game2' : {
        "Titel":"Assasins Creed", // Titel van game 2
        "detail":"The Forest is een survival-horror game waarin spelers een mysterieus eiland verkennen na een vliegtuigcrash. Je neemt de rol aan van een overlevende die zijn zoon probeert te redden terwijl je geconfronteerd wordt met een gevaarlijke omgeving en kannibalistische mutanten. De game biedt zowel een boeiende singleplayer-ervaring als een coöperatieve multiplayer-modus.",
        "imagegamecover":"images/assasins_creed-cover.jpg", // Hoofdfoto van game 2
        "pegi" : foto_pegi_lijst["18"], // PEGI afbeelding voor game 2
        "opties": ["Assasins Creed I", "Assasins Creed II", "Assasins Creed Odyssey"], // Beschikbare opties voor game 2
        "prijs": "€19,99", // Prijs van game 2
        "imagegamecover2":"images/assasins_creed-cover2.jpg", // Tweede afbeelding van game 2
        "imagegamecover3":"images/assasins_creed-cover3.jpg", // Derde afbeelding van game 2
        "reviews": { // Reviews voor game 2
            "Jhon doe": {
                "date": "aug 14, 2024", // Datum van de review
                "description": "good but simple and creative game", // Beschrijving van de review
                "stars": 2, // Sterbeoordeling
                "profileimage": "images/profile_default.jpg", // Profielafbeelding van de reviewer
            }
        },
    },
    'game3' : {
        "Titel":"Microsoft Flight Simulator 2024", // Titel van game 3
        "detail":"Microsoft Flight Simulator 2024 is een realistische simulatiegame waarin spelers de wereld vanuit de cockpit van diverse vliegtuigen verkennen. Met een uitgebreide selectie aan vliegtuigen, real-time weersimulaties en levensechte landschappen biedt de game een ongeëvenaarde vliegervaring. Of je nu missies voltooit, nieuwe gebieden ontdekt of je vliegvaardigheden verfijnt, elke vlucht voelt authentiek. Dankzij verbluffende graphics, dynamische uitdagingen en gedetailleerde simulaties blijft Microsoft Flight Simulator 2024 een favoriet voor zowel casual spelers als serieuze luchtvaartliefhebbers.",
        "imagegamecover":"images/flight_simulator-cover1.jpg", // Hoofdfoto van game 3
        "rating":ratings["4"], // Beoordeling van game 3
        "pegi" : foto_pegi_lijst["3"], // PEGI afbeelding voor game 3
        "opties": ["Microsoft Flight Simulator 2020", "Microsoft Flight Simulator 2024"], // Beschikbare opties voor game 3
        "prijs": "€79,99", // Prijs van game 3
        "imagegamecover2":"images/flight-simulator-cover2.jpeg", // Tweede afbeelding van game 3
        "imagegamecover3":"images/flight_simulator-cover3.jpg", // Derde afbeelding van game 3
        "reviews": { // Reviews voor game 3
            "Jhon doe": {
                "date": "aug 14, 2024", // Datum van de review
                "description": "good but simple and creative game", // Beschrijving van de review
                "stars": 2, // Sterbeoordeling
                "profileimage": "images/profile_default.jpg", // Profielafbeelding van de reviewer
            },
            "Jhon doe2": {
                "date": "aug 14, 2024",
                "description": "good but simple and creative game",
                "stars": 2,
                "profileimage": "images/profile_default.jpg",
            }
        }
    },
    'game4' : {
        "Titel":"Grand Theft Auto V", // Titel van game 4
        "detail":"Grand Theft Auto V is een actie-avonturengame waarin spelers een uitgestrekte, levendige open wereld verkennen in de fictieve staat San Andreas. Als Michael, Franklin en Trevor, drie unieke personages met verweven verhalen, voer je missies uit en maak je keuzes die hun levens beïnvloeden. De game biedt autoraces, heists, vrije exploratie en talloze activiteiten, gecombineerd met een spannend verhaal en interactieve gameplay. Dankzij indrukwekkende graphics, zwarte humor en rijke details blijft het een favoriet onder fans van open-wereld en verhaalgedreven games.",
        "imagegamecover":"images/gtav-cover.jpg", // Hoofdfoto van game 4
        "rating":ratings["4"], // Beoordeling van game 4
        "pegi" : foto_pegi_lijst["18"], // PEGI afbeelding voor game 4
        "opties": ["Grand Theft Auto IV", "Grand Theft Auto V", "Grand Theft Auto Online"], // Beschikbare opties voor game 4
        "prijs": "€14,80", // Prijs van game 4
        "imagegamecover2":"images/gtav-cover2.jpg", // Tweede afbeelding van game 4
        "imagegamecover3":"images/gtav-cover3.jpg", // Derde afbeelding van game 4
        "reviews": { // Reviews voor game 4
            "Jhon doe": {
                "date": "aug 14, 2024", // Datum van de review
                "description": "good but simple and creative game", // Beschrijving van de review
                "stars": 2, // Sterbeoordeling
                "profileimage": "images/profile_default.jpg", // Profielafbeelding van de reviewer
            },
            "Jhon doe2": {
                "date": "aug 14, 2024",
                "description": "good but simple and creative game",
                "stars": 2,
                "profileimage": "images/profile_default.jpg",
            }
        }
    }
}

// Switch statement om de juiste game-informatie weer te geven op basis van de titel
switch (titel) {
    case games['game1']['Titel']: // Controleer of de titel overeenkomt met game 1
        let reviews1 = games['game1'].reviews; // Haal de reviews van game 1 op

        let totaalSterren1 = 0; // Variabele voor het totaal aantal sterren
        let aantalReviews1 = Object.keys(reviews1).length; // Aantal reviews
        let gemiddeldeSterren1 = 0; // Variabele voor de gemiddelde sterren

        // Bereken de gemiddelde sterren als er reviews zijn
        if (aantalReviews1 > 0) {
            for (let reviewer in reviews1) {
                totaalSterren1 += reviews1[reviewer].stars; // Tel de sterren op
            }
            gemiddeldeSterren1 = Math.round(totaalSterren1 / aantalReviews1); // Bereken het gemiddelde
            console.log(gemiddeldeSterren1) // Log de gemiddelde sterren
            document.getElementById("reviewscount").innerText = `${aantalReviews1} Reviews` // Toon het aantal reviews
        }
        else {
            console.log("er zijn geen reviews") // Log als er geen reviews zijn
        }
        // Vul de pagina met informatie van game 1
        document.getElementById("pagina_titel").innerHTML = games['game1']["Titel"]
        document.getElementById("pagina_detail").innerHTML = games['game1']["detail"]
        document.getElementById("image-game-cover-cover").innerHTML = `<img src="${games['game1']["imagegamecover2"]}">`
        document.getElementById("image-game-cover-cover2").innerHTML = `<img src="${games['game1']["imagegamecover3"]}">`
        document.getElementById("image-game-cover").style.backgroundImage = `url(${games['game1']["imagegamecover"]})`
        document.getElementById("rating").innerHTML =  ratings[gemiddeldeSterren1] // Toon de gemiddelde rating
        document.getElementById("pegirating").innerHTML =  `<img src="${games['game1']["pegi"]}">` // Toon de PEGI-rating
        document.getElementById("prijs").innerHTML =  games['game1']["prijs"] // Toon de prijs
        // Voeg opties toe aan de dropdown
        for (let optie of games['game1']["opties"]) {
            document.getElementById("dropdowncnt").innerHTML += `<a>${optie}</a>` // Voeg elke optie toe aan de dropdown
        }

        // Voeg reviews toe aan de pagina
        for (let [reviewerName, reviewDetails] of Object.entries(games['game1'].reviews)) {
            let reviewcontainer = document.createElement("div") // Maak een container voor de review
            reviewcontainer.classList.add("reviewappendcontainer") // Voeg een klasse toe voor styling
            reviewcontainer.innerHTML = `
                <img class=profileimage src=${reviewDetails.profileimage}> <!-- Profielafbeelding van de reviewer -->
                <div class=profileinfo>
                    <h4>${reviewerName}</h4> <!-- Naam van de reviewer -->
                    <p class=date>${reviewDetails.date}</p> <!-- Datum van de review -->
                    <p class=stars>${ratings[reviewDetails.stars]}</p> <!-- Sterbeoordeling -->
                </div>
                <p>${reviewDetails.description}</p> <!-- Beschrijving van de review -->
                `
            document.getElementById("reviews-container").append(reviewcontainer) // Voeg de reviewcontainer toe aan de pagina
            console.log(reviewerName) // Log de naam van de reviewer
            console.log(reviewDetails.description) // Log de beschrijving van de review
        }
        console.log(games['game1']["Titel"]) // Log de titel van de game
        break

    case games['game2']["Titel"]: // Controleer of de titel overeenkomt met game 2
        let reviews2 = games['game1'].reviews; // Haal de reviews van game 2 op

        let totaalSterren2 = 0; // Variabele voor het totaal aantal sterren
        let aantalReviews2 = Object.keys(reviews2).length; // Aantal reviews
        let gemiddeldeSterren2 = 0; // Variabele voor de gemiddelde sterren

        // Bereken de gemiddelde sterren als er reviews zijn
        if (aantalReviews2 > 0) {
            for (let reviewer in reviews2) {
                totaalSterren2 += reviews2[reviewer].stars; // Tel de sterren op
            }
            gemiddeldeSterren2 = Math.round(totaalSterren2 / aantalReviews2); // Bereken het gemiddelde
            console.log(gemiddeldeSterren2) // Log de gemiddelde sterren
            document.getElementById("reviewscount").innerText = `${aantalReviews2} Reviews` // Toon het aantal reviews
        }
        // Vul de pagina met informatie van game 2
        document.getElementById("pagina_titel").innerHTML = games['game2']["Titel"]
        document.getElementById("pagina_detail").innerHTML = games['game2']["detail"]
        document.getElementById("image-game-cover-cover").innerHTML = `<img src="${games['game2']["imagegamecover2"]}">`
        document.getElementById("image-game-cover-cover2").innerHTML = `<img src="${games['game2']["imagegamecover3"]}">`
        document.getElementById("image-game-cover").style.backgroundImage = `url(${games['game2']["imagegamecover"]})`
        document.getElementById("rating").innerHTML =  ratings[gemiddeldeSterren2] // Toon de gemiddelde rating
        document.getElementById("pegirating").innerHTML =  `<imgeg src="${games['game2']["pegi"]}">` // Toon de PEGI-rating
        document.getElementById("prijs").innerHTML =  games['game2']["prijs"] // Toon de prijs
        // Voeg opties toe aan de dropdown
        for (let optie of games['game2']["opties"]) {
            document.getElementById("dropdowncnt").innerHTML += `<a>${optie}</a>` // Voeg elke optie toe aan de dropdown
        }
        // Voeg reviews toe aan de pagina
        for (let [reviewerName, reviewDetails] of Object.entries(games['game1'].reviews)) {
            let reviewcontainer = document.createElement("div") // Maak een container voor de review
            reviewcontainer.classList.add("reviewappendcontainer") // Voeg een klasse toe voor styling
            reviewcontainer.innerHTML = `
                <img class=profileimage src=${reviewDetails.profileimage}> <!-- Profielafbeelding van de reviewer -->
                <div class=profileinfo>
                    <h4>${reviewerName}</h4> <!-- Naam van de reviewer -->
                    <p class=date>${reviewDetails.date}</p> <!-- Datum van de review -->
                    <p class=stars>${ratings[reviewDetails.stars]}</p> <!-- Sterbeoordeling -->
                </div>
                <p>${reviewDetails.description}</p> <!-- Beschrijving van de review -->
                `
            document.getElementById("reviews-container").append(reviewcontainer) // Voeg de reviewcontainer toe aan de pagina
            console.log(reviewerName) // Log de naam van de reviewer
            console.log(reviewDetails.description) // Log de beschrijving van de review
        }
        console.log(games['game2']["Titel"]) // Log de titel van de game
        break

    case games['game3']['Titel']: // Controleer of de titel overeenkomt met game 3
        let reviews3 = games['game3'].reviews; // Haal de reviews van game 3 op

        let totaalSterren3 = 0; // Variabele voor het totaal aantal sterren
        let aantalReviews3 = Object.keys(reviews3).length; // Aantal reviews
        let gemiddeldeSterren3 = 0; // Variabele voor de gemiddelde sterren

        // Bereken de gemiddelde sterren als er reviews zijn
        if (aantalReviews3 > 0) {
            for (let reviewer in reviews3) {
                totaalSterren3 += reviews3[reviewer].stars; // Tel de sterren op
            }
            gemiddeldeSterren3 = Math.round(totaalSterren3 / aantalReviews3); // Bereken het gemiddelde
            console.log(gemiddeldeSterren3) // Log de gemiddelde sterren
            document.getElementById("reviewscount").innerText = `${aantalReviews3} Reviews` // Toon het aantal reviews
        }
        // Vul de pagina met informatie van game 3
        document.getElementById("pagina_titel").innerHTML = games['game3']["Titel"]
        document.getElementById("pagina_detail").innerHTML = games['game3']["detail"]
        document.getElementById("image-game-cover-cover").innerHTML = `<img src="${games['game3']["imagegamecover2"]}">`
        document.getElementById("image-game-cover-cover2").innerHTML = `<img src="${games['game3']["imagegamecover3"]}">`
        document.getElementById("image-game-cover").style.backgroundImage = `url(${games['game3']["imagegamecover"]})`
        document.getElementById("rating").innerHTML =  ratings[gemiddeldeSterren3] // Toon de gemiddelde rating
        document.getElementById("pegirating").innerHTML =  `<img src="${games['game3']["pegi"]}">` // Toon de PEGI-rating
        document.getElementById("prijs").innerHTML =  games['game3']["prijs"] // Toon de prijs
        // Voeg opties toe aan de dropdown
        for (let optie of games['game3']["opties"]) {
            document.getElementById("dropdowncnt").innerHTML += `<a>${optie}</a>` // Voeg elke optie toe aan de dropdown
        }

        // Voeg reviews toe aan de pagina
        for (let [reviewerName, reviewDetails] of Object.entries(games['game3'].reviews)) {
            let reviewcontainer = document.createElement("div") // Maak een container voor de review
            reviewcontainer.classList.add("reviewappendcontainer") // Voeg een klasse toe voor styling
            reviewcontainer.innerHTML = `
                <img class=profileimage src=${reviewDetails.profileimage}> <!-- Profielafbeelding van de reviewer -->
                <div class=profileinfo>
                    <h4>${reviewerName}</h4> <!-- Naam van de reviewer -->
                    <p class=date>${reviewDetails.date}</p> <!-- Datum van de review -->
                    <p class=stars>${ratings[reviewDetails.stars]}</p> <!-- Sterbeoordeling -->
                </div>
                <p>${reviewDetails.description}</p> <!-- Beschrijving van de review -->
                `
            document.getElementById("reviews-container").append(reviewcontainer) // Voeg de reviewcontainer toe aan de pagina
            console.log(reviewerName) // Log de naam van de reviewer
            console.log(reviewDetails.description) // Log de beschrijving van de review
        }
        console.log(games['game3']["Titel"]) // Log de titel van de game
        break

    case games['game4']["Titel"]: // Controleer of de titel overeenkomt met game 4
        let reviews4 = games['game4'].reviews; // Haal de reviews van game 4 op

        let totaalSterren4 = 0; // Variabele voor het totaal aantal sterren
        let aantalReviews4 = Object.keys(reviews4).length; // Aantal reviews
        let gemiddeldeSterren4 = 0; // Variabele voor de gemiddelde sterren

        // Bereken de gemiddelde sterren als er reviews zijn
        if (aantalReviews4 > 0) {
            for (let reviewer in reviews4) {
                totaalSterren4 += reviews4[reviewer].stars; // Tel de sterren op
            }
            gemiddeldeSterren4 = Math.round(totaalSterren4 / aantalReviews4); // Bereken het gemiddelde
            console.log(gemiddeldeSterren4) // Log de gemiddelde sterren
            document.getElementById("reviewscount").innerText = `${aantalReviews4} Reviews` // Toon het aantal reviews
        }
        // Vul de pagina met informatie van game 4
        document.getElementById("pagina_titel").innerHTML = games['game4']["Titel"]
        document.getElementById("pagina_detail").innerHTML = games['game4']["detail"]
        document.getElementById("image-game-cover-cover").innerHTML = `<img src="${games['game4']["imagegamecover2"]}">`
        document.getElementById("image-game-cover-cover2").innerHTML = `<img src="${games['game4']["imagegamecover3"]}">`
        document.getElementById("image-game-cover").style.backgroundImage = `url(${games['game4']["imagegamecover"]})`
        document.getElementById("rating").innerHTML =  ratings[gemiddeldeSterren4] // Toon de gemiddelde rating
        document.getElementById("pegirating").innerHTML =  `<imgeg src="${games['game4']["pegi"]}">` // Toon de PEGI-rating
        document.getElementById("prijs").innerHTML =  games['game4']["prijs"] // Toon de prijs
        // Voeg opties toe aan de dropdown
        for (let optie of games['game4']["opties"]) {
            document.getElementById("dropdowncnt").innerHTML += `<a>${optie}</a>` // Voeg elke optie toe aan de dropdown
        }
        // Voeg reviews toe aan de pagina
        for (let [reviewerName, reviewDetails] of Object.entries(games['game4'].reviews)) {
            let reviewcontainer = document.createElement("div") // Maak een container voor de review
            reviewcontainer.classList.add("reviewappendcontainer") // Voeg een klasse toe voor styling
            reviewcontainer.innerHTML = `
                <img class=profileimage src=${reviewDetails.profileimage}> <!-- Profielafbeelding van de reviewer -->
                <div class=profileinfo>
                    <h4>${reviewerName}</h4> <!-- Naam van de reviewer -->
                    <p class=date>${reviewDetails.date}</p> <!-- Datum van de review -->
                    <p class=stars>${ratings[reviewDetails.stars]}</p> <!-- Sterbeoordeling -->
                </div>
                <p>${reviewDetails.description}</p> <!-- Beschrijving van de review -->
                `
            document.getElementById("reviews-container").append(reviewcontainer) // Voeg de reviewcontainer toe aan de pagina
            console.log(reviewerName) // Log de naam van de reviewer
            console.log(reviewDetails.description) // Log de beschrijving van de review
        }
        console.log(games['game4']["Titel"]) // Log de titel van de game
        break

    default: // Als geen van de titels overeenkomt
        document.getElementById("pagina_titel").innerHTML = "Gamestars" // Toon standaard titel
        document.getElementById("pagina_detail").innerHTML = "Gamestars" // Toon standaard detail
        console.log("Err: geen game getoont") // Log foutmelding
        break
}
