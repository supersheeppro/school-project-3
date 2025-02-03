<!DOCTYPE html>
<html lang="nl"> <!-- De taal van de pagina is Nederlands -->
<head>
    <!-- Metadata en instellingen voor de webpagina -->
    <meta charset="UTF-8"> <!-- Stelt de tekencodering in voor de pagina -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Zorgt ervoor dat de pagina responsief is op mobiele apparaten -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Zorgt voor compatibiliteit met de nieuwste versie van Internet Explorer -->

    <!-- SEO (search engine optimization) metadata -->
    <meta name="description" content="Een pagina voor de home van gamestars"> <!-- Korte beschrijving van de inhoud voor zoekmachines -->
    <meta name="keywords" content="Games, rating, game, videogames, advise"> <!-- Zoekwoorden gerelateerd aan de inhoud -->
    <meta name="author" content="Devi van Riet, Kaya Altona"> <!-- Namen van de ontwikkelaars -->
    <meta name="opdracht" content="Deze pagina is gemaakt door Devi van Riet en Kaya Altona"> <!-- Specifieke opdrachtinformatie -->

    <!-- Titel en favicon -->
    <title>Gamestars - Game Review Latest</title> <!-- Titel die wordt weergegeven in de browser-tab -->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon"> <!-- Favicon voor de browser-tab -->

    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/style.css"> <!-- Link naar de hoofdcss voor stijlen -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
          integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
          crossorigin="anonymous" referrerpolicy="no-referrer"> <!-- Externe Font Awesome-stijlen voor iconen -->
</head>
<body>
<header>
    <!-- Navigatiebalk -->
    <nav>
        <!-- Logo -->
        <a href="index.php">
            <img src="images/logo_breed_wit.png" alt="logo"> <!-- Logo-afbeelding met een alt-tekst -->
        </a>

        <!-- Zoekformulier -->
        <form id="form">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!-- Zoekicoon -->
                <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/>
            </svg>
            <input type="search" id="query" name="q" placeholder="Search"> <!-- Zoekbalk -->
        </form>

        <!-- Navigatielinks -->
        <ul>
            <a href="index.php">Home</a> <!-- Link naar de homepagina -->
            <a href="games.php">Games</a> <!-- Link naar de gamespagina -->
            <a href="merch.php">Merch</a> <!-- Link naar de merchpagina -->
            <a href="contact_us_form.php">Contact</a> <!-- Link naar de contactpagina -->
        </ul>

        <!-- Winkelwagen -->
        <div class="box-cart">
            <a href="#" class="button-cart">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!-- Winkelwagenicoon -->
                    <path d="M0 24C0 10.7 10.7 0 24 0L69.5 0c22 0 41.5 12.8 50.6 32l411 0c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3l-288.5 0 5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5L488 336c13.3 0 24 10.7 24 24s-10.7 24-24 24l-288.3 0c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5L24 48C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/>
                </svg>
                <p>Your Cart</p> <!-- Tekst naast de winkelwagen -->
            </a>
        </div>
    </nav>
</header>

<?php
// Bepaal de titel van het spel op basis van de GET-parameter of gebruik een standaardwaarde
switch (isset($_GET['titel']) ? $_GET['titel'] : null) {
    case null:
        $game_titel = "Skull and Bones"; // Standaard game titel
        break;

    default:
        $game_titel = $_GET['titel']; // Game titel van de GET-parameter
        break;
}

// Lijst van PEGI afbeeldingen
$foto_pegi_lijst = array(
    "12" => "images/PEGI_12.jpg",
    "18" => "images/PEGI_18.jpg",
    "7" => "images/PEGI_7.jpg",
    "16" => "images/PEGI_16.jpg",
    "3" => "images/PEGI_3.jpg"
);

// Ratings voor de games
$ratings = array(
    "1" => "★☆☆☆☆",
    "2" => "★★☆☆☆",
    "3" => "★★★☆☆",
    "4" => "★★★★☆",
    "5" => "★★★★★",
);

// Lijst van games met hun details
$games_lijst = array(
    "Super Mario" => [
        "Titel" => "Super Mario Odyssey",
        "detail" => "Super Mario is een platformgame waarin spelers de rol aannemen van Mario, een heldhaftige loodgieter die het Paddenstoelenrijk beschermt. Het spel draait om het verslaan van vijanden, het verzamelen van munten en power-ups, en het doorkruisen van kleurrijke werelden. Spelers kunnen springen, rennen en geheime paden ontdekken om obstakels te overwinnen. Het combineert actie, avontuur en puzzels met een focus op toegankelijke en verslavende gameplay, geschikt voor zowel solo- als multiplayerervaringen.",
        "img" => "images/supermario-cover.jpg",
        "imagegamecover2" => "images/supermario-cover2.jpg",
        "imagegamecover3" => "images/supermario-cover3.jpg",
        "rating" => $ratings["4"],
        "pegi" => 3,
        "opties" => ["Super Mario Odyssey", "Super Mario Bros. Wonder", "Super Mario 3D World"],
        "prijs" => "€59,98",
        "video" => "https://www.youtube.com/embed/5kcdRBHM7kM?si=bXE8qFJ511yMutTA",
        "reviews" => [
            "alex smith" => [
                "date" => "Jan 5, 2023",
                "description" => "Super Mario Odyssey is een prachtige reis door unieke werelden. De gameplay is creatief, met de introductie van Cappy die zorgt voor verrassende interacties. Elk koninkrijk biedt iets nieuws, en de vrijheid om te verkennen is fantastisch. Een absolute aanrader voor fans van platformgames.",
                "stars" => 5,
                "pegi" => 18,
                "profileimage" => "images/profile_default.jpg",
            ],
            "sarah miller" => [
                "date" => "Feb 28, 2024",
                "description" => "De kleurrijke werelden van Super Mario Odyssey zijn visueel adembenemend. De gameplay voelt fris en uitdagend, met een perfecte balans tussen actie en puzzels. Sommige eindbazen zijn iets te eenvoudig, maar de charme van de game maakt alles goed. Een must-have voor Switch-bezitters.",
                "stars" => 4,
                "pegi" => 18,
                "profileimage" => "images/profile_default.jpg",
            ],
            "mike johnson" => [
                "date" => "Nov 15, 2024",
                "description" => "Super Mario Odyssey is een meesterwerk dat klassieke Mario-gameplay combineert met moderne innovaties. De variatie in uitdagingen en geheimen houdt je uren bezig. De moeilijkheidsgraad is over het algemeen toegankelijk, maar sommige verborgen manen bieden een leuke uitdaging. Een must-play voor elke gamer.",
                "stars" => 5,
                "pegi" => 18,
                "profileimage" => "images/profile_default.jpg",
            ],
            "lily evans" => [
                "date" => "Jun 30, 2021",
                "description" => "Super Mario Odyssey is een perfecte keuze voor jongere spelers. De speelse levels en kleurrijke omgevingen maken het een plezier om te spelen. De moeilijkheidsgraad is toegankelijk, en de humor en charme maken het geschikt voor de hele familie. Een geweldige game voor nieuwe en ervaren spelers.",
                "stars" => 4,
                "pegi" => 12,
                "profileimage" => "images/profile_default.jpg",
            ],
            "ryan cooper" => [
                "date" => "Sep 21, 2022",
                "description" => "Super Mario Odyssey combineert een nostalgische sfeer met nieuwe gameplay-mechanieken. De creatieve vrijheid, geheime maanmomenten en het plezier van verkennen maken het een onvergetelijke ervaring. Hoewel sommige delen wat eenvoudiger zijn, compenseert de totale charme dit ruimschoots.",
                "stars" => 5,
                "pegi" => 7,
                "profileimage" => "images/profile_default.jpg",
            ],
        ],
        "genre"=> "Platformspel, avonturenspel, actie, puzzelspel",
        "platforms"=> [
            "Nintendo Switch"=> "Exclusief beschikbaar op Nintendo Switch",
        ],
        "maker"=> "Super Mario Odyssey is ontwikkeld door Nintendo, een van de grootste en meest gerespecteerde gameontwikkelaars ter wereld. Specifieker: Ontwikkelaar: Nintendo EPD (Entertainment Planning & Development), een divisie binnen Nintendo die verantwoordelijk is voor veel van de grote franchises van het bedrijf, waaronder Super Mario, The Legend of Zelda, en Pokémon. Uitgever: Nintendo, die ook verantwoordelijk is voor de distributie en marketing van de game. Nintendo staat bekend om hun innovatieve benadering van game-ontwerpen en iconische franchises, en Super Mario Odyssey is daar een perfect voorbeeld van met zijn creatieve open-wereldstructuur en unieke gameplaymechanieken.",
    ],
    "Spider Man 2" => [
        "Titel" => "Spider Man 2",
        "detail" => "Spider-Man 2 is een open-wereld actiegame waarin spelers de rol aannemen van Peter Parker en Miles Morales in een dynamisch New York. Het spel draait om acrobatische gevechten, het verkennen van de stad en het bestrijden van iconische vijanden. Spelers kunnen nieuwe krachten ontgrendelen, kostuums aanpassen en strategisch vijanden verslaan. Het combineert snelle actie, meeslepend verhaal en een uitgebreide open wereld met een focus op een intense singleplayer-ervaring.",
        "img" => "images/spiderman-cover.jpg",
        "imagegamecover3" => "images/spiderman-cover2.jpg",
        "imagegamecover2" => "images/spiderman-cover3.jpg",
        "rating" => $ratings["4"],
        "pegi" => 16,
        "opties" => ["Standard Edition", "Digital Deluxe Edition", "Collector’s Edition"],
        "prijs" => "€69,99",
        "video" => "https://www.youtube.com/embed/qIQ3xNqkVC4?si=cleyhOpAlYIqtwQy",
        "reviews" => [
            "james parker" => [
                "date" => "Nov 15, 2023",
                "description" => "Spider-Man 2 is een meesterwerk op het gebied van superheldengames. De verbeterde combat, uitgebreide verhaallijn en adembenemende visuals tillen de ervaring naar een nieuw niveau. De stad voelt levendiger dan ooit, en het wisselen tussen Peter en Miles zorgt voor dynamische gameplay. Een absolute must-play voor fans van actie en avontuur.",
                "stars" => 5,
                "pegi" => 18,
                "profileimage" => "images/profile_default.jpg",
            ],
            "emma jones" => [
                "date" => "Dec 10, 2023",
                "description" => "De open wereld van Spider-Man 2 is enorm en prachtig. De toevoeging van nieuwe gadgets en vaardigheden maakt de gameplay variërend en uitdagend. Hoewel de hoofdverhaallijn sterk is, hadden enkele nevenmissies wat meer diepgang kunnen gebruiken. Desondanks is het een game die iedereen met een PS5 zou moeten proberen.",
                "stars" => 4,
                "pegi" => 18,
                "profileimage" => "images/profile_default.jpg",
            ],
            "lucas reyes" => [
                "date" => "Jan 8, 2024",
                "description" => "De opvolger van Marvel's Spider-Man stelt niet teleur. De schurken zijn overtuigend, het web-slingeren blijft fenomenaal en de graphics zijn adembenemend. Vooral de emotionele diepgang in het verhaal maakt indruk. Een aanrader voor liefhebbers van superheldenverhalen.",
                "stars" => 5,
                "pegi" => 18,
                "profileimage" => "images/profile_default.jpg",
            ],
            "sophia williams" => [
                "date" => "Dec 20, 2023",
                "description" => "Spider-Man 2 is een spannende ervaring voor jongere spelers. De actie is toegankelijk, en de humor en interacties maken het een genot om te spelen. Het verkennen van New York is magisch, hoewel de moeilijkheidsgraad soms uitdagend kan zijn. Perfect voor gamers die actie combineren met een speelse vibe.",
                "stars" => 4,
                "pegi" => 12,
                "profileimage" => "images/profile_default.jpg",
            ],
        ],
        "genre"=> "Actiespel, avonturenspel, open-wereldspel, superheldengame",
        "platforms"=> [
            "PlayStation"=> "Exclusief beschikbaar op PlayStation 5 (PS5)",
            "PC"=> "Windows (beschikbaar via Steam en Epic Games Store vanaf 30 januari 2025)",
        ],
        "maker"=> "Marvel’s Spider-Man 2 is ontwikkeld door Insomniac Games, een gerenommeerde gameontwikkelaar die bekendstaat om hun expertise in actie-avonturenspellen. Ontwikkelaar: Insomniac Games, een Amerikaanse studio die eerder verantwoordelijk was voor Marvel’s Spider-Man (2018) en Marvel’s Spider-Man: Miles Morales (2020).Uitgever: Sony Interactive Entertainment, dat de distributie en marketing verzorgt. Insomniac Games staat bekend om hun meeslepende gameplay, innovatieve web-slingering en indrukwekkende verhaallijnen binnen het Spider-Man-universum.",
    ],
);

// Verwerken van een nieuwe review indien het formulier is ingediend
try {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Controleer of alle vereiste velden zijn ingevuld
        if (!isset($_POST['naam'], $_POST['beschrijving'], $_POST['rating'])) {
            throw new Exception("Niet alle velden zijn correct ingevuld.");
        }

        // Verkrijg en ontsmet de invoer van de gebruiker
        $naam = htmlspecialchars($_POST['naam']);
        $beschrijving = htmlspecialchars($_POST['beschrijving']);
        $rating = htmlspecialchars($_POST['rating']);

        // Maak een nieuwe review aan
        $new_review = [
            "date" => date("M, d, Y"), // Huidige datum
            "description" => $beschrijving,
            "stars" => $rating,
            "pegi" => 18, // PEGI-rating voor de review
            "profileimage" => "images/profile_default.jpg", // Standaard profielafbeelding
        ];

        // Voeg de nieuwe review toe aan de juiste game
        foreach ($games_lijst as $game => &$game_info){
            if ($game == $game_titel){
                $game_info['reviews'][$naam] = $new_review; // Voeg de review toe aan de game
            };
        }

        // Controleer of de rating geldig is
        if (!in_array($rating, ["1", "2", "3", "4", "5"])) {
            throw new Exception("Ongeldige ratingwaarde.");
        }
    }
} catch (Exception $e) {
    $foutmelding = $e->getMessage(); // Bewaar foutmelding
}

// Functie om het gemiddelde aantal sterren en het aantal reviews te berekenen
function berekenGemiddeldeSterrenEnAantal($reviews) {
    $totaalSterren = 0; // Totaal aantal sterren
    $aantalReviews = count($reviews); // Aantal reviews

    if ($aantalReviews === 0) {
        return [
            'gemiddelde' => 0, // Geen reviews, gemiddelde is 0
            'aantal' => 0 // Geen reviews
        ];
    }

    // Tel het aantal sterren op
    foreach ($reviews as $review) {
        $totaalSterren += $review['stars'];
    }
    $gemiddelde = round($totaalSterren / $aantalReviews); // Bereken het gemiddelde

    return [
        'gemiddelde' => $gemiddelde,
        'aantal' => $aantalReviews
    ];
}

// Bereken het gemiddelde aantal sterren en het aantal ratings voor de geselecteerde game
if (isset($games_lijst[$game_titel]['reviews'])) {
    $resultaat = berekenGemiddeldeSterrenEnAantal($games_lijst[$game_titel]['reviews']);
    $gemiddeldeSterren = $resultaat['gemiddelde'];
    $aantalRatings = $resultaat['aantal'];
}
?>

<!-- Popup voor video -->
<div id="popup" class="popup">
    <div class="popup-content">
        <span id="closePopupBtn" class="close-btn">&times;</span>
        <?php
        // Toon de video van de geselecteerde game
        foreach ($games_lijst as $game => &$game_info){
            if ($game == $game_titel){
                echo "<iframe id=video src=$game_info[video] title=YouTube video player frameborder=0 allow=accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share referrerpolicy=strict-origin-when-cross-origin allowfullscreen></iframe>";
            }
        }
        ?>
    </div>
</div>

<?php
// Popup voor leeftijdsverificatie
foreach ($games_lijst as $game => &$game_info){
    if ($game == $game_titel){
        if ($game_info["pegi"] >= 16) {
            echo '<div id="popup2" style="display: block" class="popup2-content">';
        }
        else {
            echo '<div id="popup2" class="popup2-content">';
        }
    }
}
?>

<div class="popup2">
    <div class="popup-content2">
        <div class="popup2-section">
            <img class="logoImg" src="images/logo_breed_wit.png" alt="logo-wit">
        </div>
        <h3 class="heading1">Voor deze pagina moet je 16+ zijn</h3>
        <p class="bodyText">Verifieer jezelf hieronder</p>
        <div class="btn-age-verification">
            <button id="close" class="age-verification">Ik ben 16 of ouder - Enter</button>
            <a href="index.php"><button class="tweede-btn age-verification">Ik ben onder 16 - Exit</button></a>
        </div>
        <p class="bottomText">
            Op onze pagina over <a href="#">ouderlijk toezicht</a> wordt uitgelegd hoe u eenvoudig<br>
            de toegang tot deze site kunt blokkeren.
        </p>
        <div class="disclaimer-wrapper">
            <span class="copyright">© Gamestars.com, 2025</span>
            <img src="images/logo_kopie.png" alt="disclaimer-image">
        </div>
    </div>
</div>
</div>

<!-- Popup voor het indienen van een review -->
<div id="popup3">
    <div class="popup3">
        <form method="POST" action="">
            <label class="popup3-titel" for="naam">Naam:</label><br>
            <input type="text" id="naam" name="naam" required placeholder="Vul hier je naam in"><br><br>

            <label class="popup3-titel" for="beschrijving">Beschrijving:</label><br>
            <textarea id="beschrijving" name="beschrijving" rows="4" cols="50" required placeholder="Beschrijf je antwoord hier..."></textarea><br><br>

            <labe class="popup3-titel">Rating:</labe>
            <div class="popup3-radio-list">
                <div class="ctn-radio">
                    <input type="radio" id="rating1" name="rating" value="1" required>
                    <label for="rating1"><p>★☆☆☆☆</p></label>
                </div>
                <div class="ctn-radio">
                    <input type="radio" id="rating2" name="rating" value="2">
                    <label for="rating2"><p>★★☆☆☆</p></label>
                </div>
                <div class="ctn-radio">
                    <input type="radio" id="rating3" name="rating" value="3">
                    <label for="rating3"><p>★★★☆☆</p></label>
                </div>
                <div class="ctn-radio">
                    <input type="radio" id="rating4" name="rating" value="4">
                    <label for="rating4"><p>★★★★☆</p></label>
                </div>
                <div class="ctn-radio">
                    <input type="radio" id="rating5" name="rating" value="5">
                    <label for="rating5"><p>★★★★★</p></label>
                </div>
            </div>
            <div class="ctn-popup3-btn">
                <button type="submit">Verstuur Review ></button>
                <button type="button" id="close-popup-button">Sluiten</button>
            </div>
        </form>
    </div>
</div>

<main>
    <section class="container-game-detail">
        <img class="game-detail-img" src="images/game.png">
        <?php
        // Toon de game cover afbeelding
        foreach ($games_lijst as $game => &$game_info){
            if ($game == $game_titel){
                echo "<figure id=image-game-cover style='background-image: url($game_info[img]);'>"
                ?>
                <figure id="image-game-cover-cover">
                    <?php
                    // Toon alternatieve game cover afbeeldingen
                    foreach ($games_lijst as $game => &$game_info){
                        if ($game == $game_titel){
                            echo "<img id=image1 src=$game_info[imagegamecover2]>";
                        }
                    }
                    ?>
                </figure>

                <figure id="image-game-cover-cover2">
                    <?php
                    // Toon nog een alternatieve game cover afbeelding
                    foreach ($games_lijst as $game => &$game_info){
                        if ($game == $game_titel){
                            echo "<img id=image2 src=$game_info[imagegamecover3]>";
                        }
                    }
                    ?>
                </figure>

                <?php
                echo"</figure>";
            }
        }
        ?>

        <div class="game-info">
            <?php
            // Toon de titel van de game
            foreach ($games_lijst as $game => &$game_info){
                if ($game == $game_titel){
                    echo "<h1>$game_info[Titel]</h1>";
                }
            }
            ?>
            <div class="rating-box">
                <?php
                // Toon de gemiddelde rating van de game
                foreach ($games_lijst as $game => &$games_info) {
                    if ($game == $game_titel) {
                        echo "<p class='rating-games-info'>$ratings[$gemiddeldeSterren]</p>";
                    }
                }
                ?>
                <p class="rating-box-p">
                    <?php
                    echo "$aantalRatings Reviews" // Toon het aantal reviews
                    ?>
                </p>
            </div>
            <hr>
            <div class="box-prijs">
                <?php
                // Toon de prijs van de game
                foreach ($games_lijst as $game => &$games_info) {
                    if ($game == $game_titel) {
                        echo "<h2>$games_info[prijs]</h2>";
                    }
                }
                ?>
                <div class="dropdown-box">
                    <p>Select, Model</p>
                    <div class="dropdown">
                        <button id="dropdownbtn" class="dropdown-button">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z"/></svg>
                        </button>
                        <div id="dropdowncnt" class="dropdown-content">
                            <?php
                            // Toon de beschikbare opties voor de game
                            foreach ($games_lijst as $game => &$game_info){
                                if ($game == $game_titel){
                                    foreach ($game_info["opties"] as $index => $optie) {
                                        echo "<a class='optielink' data='$index' href='#'>$optie</a>";
                                    }
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <?php
            // Toon de details van de game
            foreach ($games_lijst as $game => &$game_info){
                if ($game == $game_titel){
                    echo "<p class=tekst-game-detail-2>$game_info[detail]</p>";
                }
            }
            ?>
            <div class="box-add-to-cart">
                <div class="cart-box">
                    <svg id="svg1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M0 48C0 21.5 21.5 0 48 0l0 48 0 393.4 130.1-92.9c8.3-6 19.6-6 27.9 0L336 441.4 336 48 48 48 48 0 336 0c26.5 0 48 21.5 48 48l0 440c0 9-5 17.2-13 21.3s-17.6 3.4-24.9-1.8L192 397.5 37.9 507.5c-7.3 5.2-16.9 5.9-24.9 1.8S0 497 0 488L0 48z"/></svg>
                    <svg id="svg2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M0 48V487.7C0 501.1 10.9 512 24.3 512c5 0 9.9-1.5 14-4.4L192 400 345.7 507.6c4.1 2.9 9 4.4 14 4.4c13.4 0 24.3-10.9 24.3-24.3V48c0-26.5-21.5-48-48-48H48C21.5 0 0 21.5 0 48z"/></svg>
                </div>
                <?php
                // Toon de PEGI afbeelding van de game
                foreach ($games_lijst as $game => &$game_info) {
                    if ($game == $game_titel) {
                        echo "<img src='" . $foto_pegi_lijst[$game_info["pegi"]] ."'>";
                    }
                }
                ?>
            </div>
        </div>
    </section>
    <hr>
    <section class="ctn-game-details">
        <div class="container-game-details">
            <div id="item-game-detail-genre">
                <h1>Genre</h1>
                <?php
                // Toon het genre van de game
                foreach ($games_lijst as $game => &$game_info) {
                    if ($game == $game_titel) {
                        echo "<p>$game_info[genre]</p>";
                    }
                }
                ?>
            </div>

            <div id="item-game-detail-platforms">
                <h1>Platforms</h1>
                <?php
                // Toon de platforms waarop de game beschikbaar is
                foreach ($games_lijst as $game => &$game_info) {
                    if ($game == $game_titel) {
                        foreach ($game_info["platforms"] as $titel => $detail) {
                            echo "<div class=platform><h4>&bull; $titel</h4><p>$detail</p></div>";
                        }
                    }
                }
                ?>
            </div>

            <div id="item-game-detail-maker">
                <h1>Maker</h1>
                <?php
                // Toon de maker van de game
                foreach ($games_lijst as $game => &$game_info) {
                    if ($game == $game_titel) {
                        echo "<p>$game_info[maker]</p>";
                    }
                }
                ?>
            </div>
        </div>
    </section>
    <hr>
    <div class="review-title-container">
        <h1 class="reviews-header">Reviews</h1>
        <div class="box-cart2">
            <a href="#" id="reviewaddbutton" class="button-cart2">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                    <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z"/>
                </svg>
                <p>Write a Review</p> <!-- Knop om een review te schrijven -->
            </a>
        </div>
    </div>
    <section id="reviews-container-latest">
        <div class="slideshow">
            <?php
            // Toon de reviews van de geselecteerde game
            foreach ($games_lijst as $game => &$game_info) {
                if ($game == $game_titel) {
                    foreach ($game_info["reviews"] as $name => $review) {
                        if ($review["pegi"] >= 16) {
                            $stars = $review["stars"];
                            echo "<div class='review-slide'>
                            <img class='profileimage' src='$review[profileimage]'>
                            <div class='profileinfo'>
                                <h4>$name</h4>
                                <p class='date'>$review[date]</p>
                                <p class='stars'>$ratings[$stars]</p>
                            </div>
                            <p class='description'>$review[description]</p>
                          </div>";
                        }
                    }
                }
            }
            ?>
        </div>
        <button class="prev">❮</button> <!-- Vorige review knop -->
        <button class="next">❯</button> <!-- Volgende review knop -->
    </section>
</main>

<footer>
    <hr>
    <div class="footer-content">
        <div class="footer-items">
            <img src="images/logo_kopie.png" alt="logo">
            <p>1717 Harrison St, San Francisco, CA 94103, USA</p>
            <p>&copyGameStars</p>
        </div>
        <div>
            <h1>Main Menu</h1><br>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="games.php">Games</a></li>
                <li><a href="merch.php">Merch</a></li>
                <li><a href="contact_us_form.php">Contact</a></li>
            </ul>
        </div>
        <div>
            <h1>Find Us On</h1><br>
            <ul>
                <li><a href="https://x.com"><i class="fa-brands fa-square-x-twitter"></i></a></li>
                <li><a href="https://www.facebook.com"><i class="fa-brands fa-square-facebook"></i></a></li>
                <li><a href="https://www.instagram.com"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="https://nl.linkedin.com"><i class="fa-brands fa-linkedin"></i></a></li>
            </ul>
        </div>
        <div>
            <h1>Contact Us</h1><br>
            <p>
                177 Huntington Ave Ste 1703<br><br>
                contact-us@company.com<br><br>
                +1-617-555-0108
            </p>
        </div>
    </div>
    <p class="disclaimer-footer">
        Disclaimer : This website is not responsible for any mistakes or inaccuracies in the content provided.
    </p>
</footer>
<script src="js/review_pagina_latest.js"></script> <!-- Script voor de reviewpagina -->
<script src="js/script3.js"></script> <!-- Algemene scripts voor de website -->
</body>
</html>