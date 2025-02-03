<!DOCTYPE html>
<html lang="nl">
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
    <meta name="author" content="Devi van Riet, Kaya Altona">

    <!-- De Opdracht van de huidige pagina.  -->
    <meta name="opdracht" content="Deze pagina is gemaakt door Devi van Riet en Kaya Altona">

    <!-- De titel van de pagina, deze verschijnt op het tabblad, geef hieraan waar de pagina over gaat  -->
    <title>Gamestars - Game Review 2</title>

    <!-- Favicon kleine afbeelding die wordt weergegeven in de browser-tabbladen -->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">

    <!--  link naar de stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<header>
    <nav>
        <a href="index.php">
            <img src="images/logo_breed_wit.png" alt="logo">
        </a>
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

<main>
    <section class="container-game-detail">
        <figure>
            <?php
            switch (true) {
                case isset($_GET['titel']):
                    $game_titel = $_GET['titel'];
                    break;
                default:
                    $game_titel = "Minecraft";
            }


            $foto_pegi_lijst = array(
                "12" => "images/pegi_12.jpg",
                "18" => "images/pegi_18.jpg",
                "7" => "images/pegi_7.jpg",
            );

            $ratings = array(
                "1" => "★☆☆☆☆",
                "2" => "★★☆☆☆",
                "3" => "★★★☆☆",
                "4" => "★★★★☆",
                "5" => "★★★★★",
            );

            $games_lijst = array(
                "The Forest" => [
                    "Titel" => "The Forest",
                    "detail" => "Fortnite is een populaire battle royale-game waarin spelers vechten op een eiland tot één winnaar overblijft. Het combineert schieten, bouwen en overleven in kleurrijke omgevingen. Met regelmatige updates, samenwerkingen en verschillende spelmodi blijft het geliefd bij gamers wereldwijd.",
                    "img" => "images/theforest.jpg",
                    "pegi" => $foto_pegi_lijst["18"],
                    "opties" => ["The Forest"],
                    "prijs" => "10$",
                    "reviews" => [
                        "jhon doe" => [
                            "date" => "aug 14, 2024",
                            "description" => "good but simple and creative game",
                            "stars" => 4,
                            "profileimage" => "images/profile_default.jpg",
                        ]
                    ]

                ],
                "Minecraft" => [
                    "Titel" => "Minecraft",
                    "detail" => "Minecraft is een creatief sandbox-spel waarin spelers een wereld van blokken verkennen, bouwen en overleven. Het biedt verschillende spelmodi, zoals Survival, Creative en Adventure, en laat spelers onbeperkt bouwen en ontdekken in een procedureel gegenereerde wereld met biomen, vijanden en dimensies. Dankzij de grote vrijheid, een actieve gemeenschap en educatieve toepassingen is Minecraft geschikt voor alle leeftijden en blijft het wereldwijd populair.",
                    "img" => "images/minecraft-breed.webp",
                    "pegi" => $foto_pegi_lijst["18"],
                    "opties" => ["Java Edition", "Bedrock Edition", "Legends", "Dungeons"],
                    "prijs" => "20$",
                    "reviews" => [
                        "alex smith" => [
                            "date" => "Jan 5, 2025",
                            "description" => "An endlessly creative sandbox that sparks your imagination! Whether you're building massive castles or exploring deep caves, Minecraft never runs out of surprises. Truly a masterpiece for all ages.",
                            "stars" => 3,
                            "profileimage" => "images/profile_default.jpg",
                        ],
                        "sarah miller" => [
                            "date" => "Dec 28, 2024",
                            "description" => "I love how Minecraft allows me to unwind after a long day. The mix of survival and creativity modes is perfect. However, the lack of official mods in the base game can be limiting unless you dive into community content.",
                            "stars" => 4,
                            "profileimage" => "images/profile_default.jpg",
                        ],
                        "mike johnson" => [
                            "date" => "Nov 15, 2024",
                            "description" => "While the game is fun and engaging, the graphics might feel outdated for new players. That said, its charm lies in its simplicity, and it's great to play with friends!",
                            "stars" => 3,
                            "profileimage" => "images/profile_default.jpg",
                        ],
                        "lily evans" => [
                            "date" => "Oct 30, 2024",
                            "description" => "I've been playing Minecraft for years, and it still amazes me. The community servers and mods bring endless possibilities. Perfect for kids and adults alike!",
                            "stars" => 3,
                            "profileimage" => "images/profile_default.jpg",
                        ],
                        "ryan cooper" => [
                            "date" => "Sep 21, 2024",
                            "description" => "The exploration aspect is amazing, especially after the Caves & Cliffs update. My only complaint is the lack of clear instructions for beginners. Still, one of the best games I've played.",
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
            

            foreach ($games_lijst as $game => $game_info){
                if ($game == $game_titel){
                    echo "<img src=$game_info[img]>";
                }
            }

            ?>
        </figure>
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
                                    foreach ($game_info["opties"] as $optie){
                                        echo "<a href='#'>$optie</a>";
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

                foreach ($games_lijst as $game => $game_info){
                    if ($game == $game_titel){
                        echo "<img src=$game_info[pegi]>";
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
<script src="js/script1.js"></script>
</body>
</html>