<!DOCTYPE html>
<html lang="nl">
<head>
    <head>
        <meta charset="UTF-8">
        <!-- Zorgt ervoor dat de pagina correct wordt weergegeven op mobiele apparaten. -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- SEO (search engine optimation) Metagegevens -->

        <!-- Description voor zoekmachines en sociale media, omschrijft kort de inhoud van de pagina. -->
        <meta name="description" content="Een pagina voor de home van gamestars">

        <!-- Keywords Helpt zoekmachines begrijpen waar de pagina over gaat. -->
        <meta name="keywords" content="Games, rating, game, videogames, advise">

        <!-- Author de naam van de developer van de pagina.  -->
        <meta name="author" content="Devi van Riet">

        <!-- De Opdracht van de huidige pagina.  -->
        <meta name="opdracht" content="Deze pagina is gemaakt door Devi van Riet">

        <!-- De titel van de pagina, deze verschijnt op het tabblad, geef hieraan waar de pagina over gaat  -->
        <title>Gamestars - Game Review 1</title>

        <!-- Favicon kleine afbeelding die wordt weergegeven in de browser-tabbladen -->
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">

        <!--  link naar de stylesheet -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

<body>
<header>
    <nav>
        <img src="images/logo_breed_wit.png" alt="logo">
        <form id="form">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
            <input type="search" id="query" name="q" placeholder="Search">
        </form>
        <ul>
            <a href="index.php">Home</a>
            <a href="games.php">Games</a>
            <a href="merch.php">Merch</a>
            <a href="contact_us_form.php">Contact</a>
        </ul>
        <div class="box-cart">
            <a href="#" class="button-cart">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M0 24C0 10.7 10.7 0 24 0L69.5 0c22 0 41.5 12.8 50.6 32l411 0c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3l-288.5 0 5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5L488 336c13.3 0 24 10.7 24 24s-10.7 24-24 24l-288.3 0c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5L24 48C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>
                <p>Your Cart</p>
            </a>
        </div>
    </nav>
</header>
<?php 
            switch (isset($_GET['titel']) ? $_GET['titel'] : null) {
                case null: 
                    $game_titel = "Skull and Bones";
                    break;

                default: 
                    $game_titel = $_GET['titel'];
                    break;
            }


            $foto_pegi_lijst = array(
                "12" => "images/PEGI_12.jgp",
                "18" => "images/PEGI_18.jpg",
                "7" => "images/PEGI_7.jpg",
                "16" => "images/PEGI_3.jpg"
            );

            $ratings = array(
                "1" => "★☆☆☆☆",
                "2" => "★★☆☆☆",
                "3" => "★★★☆☆",
                "4" => "★★★★☆",
                "5" => "★★★★★",
            );

            $games_lijst = array(
                "Far Cry 4" => [
                    "Titel" => "Far Cry 4",
                    "detail" => "Far Cry 4 is een open-wereld actie-avonturenspel waarin spelers Kyrat verkennen, een fictief Himalayagebied vol gevaar en schoonheid. Als Ajay Ghale strijd je tegen de tirannieke heerser Pagan Min. De game combineert intense gevechten, crafting en boeiende missies met prachtige omgevingen, keuzevrijheid en een meeslepend verhaal vol verrassende wendingen.",
                    "img" => "images/far-cry4-cover.jpg",
                    "imagegamecover3" => "images/far-cry5-cover2.jpg",
                    "imagegamecover2" => "images/far-cry6-cover3.jpg",
                    "rating" => $ratings["4"],
                    "pegi" => $foto_pegi_lijst["18"],
                    "opties" => ["Far Cry 4", "Far Cry 5", "Far Cry 6"],
                    "prijs" => "€29,99",
                    "video" => "https://www.youtube.com/embed/xI6uV47jKME?si=YcKgGW79PjsmNf8h",
                    "reviews" => [
                        "alex smith" => [
                            "date" => "Jan 5, 2023",
                            "description" => "Far Cry 4 biedt een prachtige open wereld in Kyrat met talloze activiteiten en boeiende gameplay. Het verhaal rondom Pagan Min is meeslepend, maar de keuzes voelen soms oppervlakkig. De mix van stealth en actie houdt de gameplay fris. Een must-play voor fans van actie-avonturen en open-wereldspellen.",
                            "stars" => 3,
                            "profileimage" => "images/profile_default.jpg",
                        ],
                        "sarah miller" => [
                            "date" => "Feb 28, 2024",
                            "description" => "De graphics en sfeer van Far Cry 4 zijn adembenemend, en Kyrat voelt levendig aan. Het verhaal is interessant, maar niet zo krachtig als verwacht. Gameplay en wapens zijn uitstekend, maar sommige missies herhalen zichzelf. Een geweldige game voor liefhebbers van verkennen en intensievere actie.",
                            "stars" => 4,
                            "profileimage" => "images/profile_default.jpg",
                        ],
                        "mike johnson" => [
                            "date" => "Nov 15, 2024",
                            "description" => "Met Far Cry 4 krijg je een prachtig vormgegeven wereld die uitnodigt tot verkenning. De gameplay is gevarieerd, maar de AI van vijanden laat soms te wensen over. Pagan Min is een sterke antagonist, maar zijn rol had meer diepgang kunnen krijgen. Toch een indrukwekkende open-wereldervaring.",
                            "stars" => 3,
                            "profileimage" => "images/profile_default.jpg",
                        ],
                        "lily evans" => [
                            "date" => "Jun 30, 2021",
                            "description" => "Far Cry 4 is een sterke opvolger in de serie met een meeslepende wereld en uitdagende gameplay. De combinatie van stealth, actie en crafting houdt het boeiend. Het verhaal is goed, maar niet spectaculair. Een aanrader voor spelers die genieten van creatieve vrijheid en intens gevechtsscenario's.",
                            "stars" => 3,
                            "profileimage" => "images/profile_default.jpg",
                        ],
                        "ryan cooper" => [
                            "date" => "Sep 21, 2022",
                            "description" => "Far Cry 4 is een indrukwekkende mix van actie, avontuur en verkenning in een prachtig vormgegeven Himalaya-setting. De gameplay biedt vrijheid, van stealth tot explosieve actie, met talloze activiteiten zoals jagen en crafting. Hoewel het verhaal rond Pagan Min sterk begint, voelt het soms onderontwikkeld. De dynamische wereld en gameplay maken het echter een geweldige ervaring voor open-wereldfans.",
                            "stars" => 4,
                            "profileimage" => "images/profile_default.jpg",
                        ],
                    ]


                ],
                "Skull and Bones" => [
                    "Titel" => "Skull and Bones",
                    "detail" => "Skull and Bones is een open-wereldactiegame waarin spelers de rol aannemen van piraten in de Gouden Eeuw van de Piraterij. Het spel draait om zeegevechten, handel en het verkennen van uitgestrekte oceanen. Spelers kunnen schepen aanpassen, vijandige piraten bevechten en bondgenootschappen smeden. Het combineert strategie, actie en avontuur met een focus op multiplayer-ervaringen.",
                    "img" => "images/skullandbones-cover.jpg",
                    "imagegamecover3" => "images/skullandbones-cover2.jpg",
                    "imagegamecover2" => "images/skullandbones-cover3.png",
                    "rating" => $ratings["4"],
                    "pegi" => $foto_pegi_lijst["18"],
                    "opties" => ["Standard Edition", "Deluxe Edition", "Premium Edition"],
                    "prijs" => "€39,99",
                    "video" => "https://www.youtube.com/embed/OmDYo7MbQxo?si=Ztaw2KFEeMYasO6G",
                    "reviews" => [
                        "alex smith" => [
                            "date" => "Jan 5, 2018",
                            "description" => "Skull and Bones is een open-wereldactiegame waarin spelers de rol aannemen van piraten in de Gouden Eeuw van de Piraterij. Het spel draait om zeegevechten, handel en het verkennen van uitgestrekte oceanen. Spelers kunnen schepen aanpassen, vijandige piraten bevechten en bondgenootschappen smeden. Het combineert strategie, actie en avontuur met een focus op multiplayer-ervaringen.",
                            "stars" => 3,
                            "profileimage" => "images/profile_default.jpg",
                        ],
                        "sarah miller" => [
                            "date" => "Dec 28, 2024",
                            "description" => "De sfeer van Skull and Bones is indrukwekkend, met realistische scheepsmechanica en prachtige oceaangrafics. Multiplayer missies zijn leuk, maar solo-spelers kunnen zich snel vervelen. Het gebrek aan een sterk verhaal laat een leegte achter, maar de actie en customization maken veel goed. Een solide keuze voor liefhebbers van strategische piratenavonturen.",
                            "stars" => 4,
                            "profileimage" => "images/profile_default.jpg",
                        ],
                        "mike johnson" => [
                            "date" => "Mar 15, 2021",
                            "description" => "Skull and Bones voelt als een stap in de juiste richting voor piratenspellen, met zijn verbluffende graphics en intense gevechten. Helaas wordt de ervaring beperkt door repetitieve gameplay en een gebrek aan diepgang in de missies. Voor wie vooral multiplayergevechten waardeert, is het een aanrader, maar solo-avonturiers kunnen beter verder zoeken.",
                            "stars" => 3,
                            "profileimage" => "images/profile_default.jpg",
                        ],
                        "lily evans" => [
                            "date" => "Oct 30, 2023",
                            "description" => "Als je droomt van het kapen van schepen en verkennen van open zeeën, levert Skull and Bones precies dat. Het spel biedt realistische gameplay en adembenemende graphics, maar het mist een sterk verhaal en betekenisvolle progressie. Voor piratenfans is het een vermakelijke ervaring, maar niet de revolutie waar velen op hoopten.",
                            "stars" => 3,
                            "profileimage" => "images/profile_default.jpg",
                        ],
                        "ryan cooper" => [
                            "date" => "Apr 21, 2023",
                            "description" => "Het spel schittert met zijn indrukwekkende visuals en meeslepende zeegevechten. Scheepsaanpassingen en samenwerking met vrienden geven extra plezier. Toch voelt de gameplay soms herhalend aan, en het gebrek aan een meeslepend verhaal maakt het minder memorabel. Skull and Bones is leuk, maar mist de epische grandeur die je zou verwachten van een piratenspel. ",                           
                            "stars" => 4,
                            "profileimage" => "images/profile_default.jpg",
                        ],
                    ]

                ],
            );
            function berekenGemiddeldeSterrenEnAantal($reviews) {
                $totaalSterren = 0;
                $aantalReviews = count($reviews);
            
                if ($aantalReviews === 0) {
                    return [
                        'gemiddelde' => 0,  
                        'aantal' => 0       
                    ];
                }
            
                foreach ($reviews as $review) {
                    $totaalSterren += $review['stars'];
                }
                $gemiddelde = round($totaalSterren / $aantalReviews);
            
                return [
                    'gemiddelde' => $gemiddelde,
                    'aantal' => $aantalReviews
                ];
            }

            if (isset($games_lijst[$game_titel]['reviews'])) {
                $resultaat = berekenGemiddeldeSterrenEnAantal($games_lijst[$game_titel]['reviews']);
                $gemiddeldeSterren = $resultaat['gemiddelde'];
                $aantalRatings = $resultaat['aantal'];
            }
?>
<div id="popup" class="popup">
    <div class="popup-content">
        <span id="closePopupBtn" class="close-btn">&times;</span>
        <?php
            foreach ($games_lijst as $game => $game_info){
                if ($game == $game_titel){
                    echo "<iframe id=video src=$game_info[video] title=YouTube video player frameborder=0 allow=accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share referrerpolicy=strict-origin-when-cross-origin allowfullscreen></iframe>";
                }
            }
        ?>
    </div>
</div>
<div id="popup2" class="popup2-content">
    <div class="popup2">
        <div class="popup-content2">
            <div class="popup2-section">
                <img class="logoImg" src="images/logo_breed_wit.png" alt="logo-wit">
            </div>
            <h3 class="heading1">Voor deze pagina moet je 18+ zijn</h3>
            <p class="bodyText">Verifieer jezelf hieronder</p>
            <div class="btn-age-verification">
                <button id="close" class="age-verification">Ik ben 18 of ouder - Enter</button>
                <a href="index.php"><button class="tweede-btn age-verification">Ik ben onder 18 - Exit</button></a>
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


<main>
    <section class="container-game-detail">
    <img class="game-detail-img" src="images/game.png">
        <?php
            foreach ($games_lijst as $game => $game_info){
                if ($game == $game_titel){
                    echo "<figure id=image-game-cover style='background-image: url($game_info[img]);'>"
                    ?>
                    <figure id="image-game-cover-cover">
                        <?php
                            foreach ($games_lijst as $game => $game_info){
                                if ($game == $game_titel){
                                    echo "<img id=image1 src=$game_info[imagegamecover2]>";
                                }
                            }
                        ?>
                    </figure>
                    <figure id="image-game-cover-cover2">
                        <?php
                            foreach ($games_lijst as $game => $game_info){
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
            foreach ($games_lijst as $game => $game_info){
                if ($game == $game_titel){
                    echo "<h1>$game_info[Titel]</h1>";
                }
            }
            ?>
            <div class="rating-box">
                <?php
                foreach ($games_lijst as $game => $games_info) {
                    if ($game == $game_titel) {
                        echo "<p class='rating-games-info'>$ratings[$gemiddeldeSterren]</p>";
                    }
                }
                ?>
                <p class="rating-box-p">
                    <?php
                    echo "$aantalRatings Reviews"
                    ?>
                </p>
            </div>
            <hr>
            <div class="box-prijs">
                <?php
                foreach ($games_lijst as $game => $games_info) {
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

                            foreach ($games_lijst as $game => $game_info){
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
            foreach ($games_lijst as $game => $game_info){
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

                foreach ($games_lijst as $game => $game_info) {
                    if ($game == $game_titel) {
                        echo "<img src='" . $game_info["pegi"] ."'>";
                    }
                }

                ?>
            </div>
        </div>
    </section>
    <hr>
    <h1 class="reviews-header">Reviews</h1>
    <section id="reviews-container">
    <?php
        foreach ($games_lijst as $game => $game_info){
            if ($game == $game_titel){
                foreach ($game_info["reviews"] as $name => $review){
                $stars = $review["stars"];
                echo "<div class=reviewappendcontainer>
                        <img class=profileimage src=$review[profileimage]>
                        <div class=profileinfo>
                            <h4>$name</h4>
                            <p class=date>$review[date]</p>
                            <p class=stars>$ratings[$stars]</p>
                        </div>
                        <p>$review[description]</p>
                </div>"
                ;
            }
        }
    }
        ?>      

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
        Disclaimer: This website is not responsible for any mistakes
    </p>
</footer>
<script src="js/script.js"></script>
</body>
</html>