<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <!-- Zorgt ervoor dat de pagina correct wordt weergegeven op mobiele apparaten. -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- SEO (search engine optimation) Metagegevens -->

    <!-- Description voor zoekmachines en sociale media, omschrijft kort de inhoud van de pagina. -->
    <meta name="description" content="Een pagina met de games en de ratings ervan">

    <!-- Keywords Helpt zoekmachines begrijpen waar de pagina over gaat. -->
    <meta name="keywords" content="Games, rating, game, videogames, advise">

    <!-- Author de naam van de developer van de pagina.  -->
    <meta name="author" content="Dévi van Riet">

    <!-- De Opdracht van de huidige pagina.  -->
    <meta name="opdracht" content="Deze pagina is gemaakt door Dévi van Riet">

    <!-- De titel van de pagina, deze verschijnt op het tabblad, geef hieraan waar de pagina over gaat  -->
    <title>Gamestars - Games</title>

    <!-- Favicon kleine afbeelding die wordt weergegeven in de browser-tabbladen -->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
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
<main class="main3">
    <!-- Horizontale rij met 6 foto's en titels -->
    <section class="top-games">
        <figure>
            <img src="images/sims.jpg"alt="Game 1">
            <figcaption>FREEPLAY</figcaption>
        </figure>
        <figure>
            <img src="images/farmingsimulator.jpg" alt="Game 2">
            <figcaption>LAND</figcaption>
        </figure>
        <figure>
            <img src="images/jumangi.jpg" alt="Game 3">
            <figcaption>ADVENTURE</figcaption>
        </figure>
        <figure>
            <img src="images/startwarsjedi.jpg" alt="Game 4">
            <figcaption>STORY</figcaption>
        </figure>
        <figure>
            <img src="images/daysgone.jpg" alt="Game 5">
            <figcaption>SURVIVAL</figcaption>
        </figure>
        <figure>
            <img src="images/fifa19.jpg" alt="Game 6">
            <figcaption>SPORT</figcaption>
        </figure>
    </section>
    <section class="popular-game-section">
        <div class="popular-game-section-box">
            <div class="box-slideshow-games-1">
                <article class="content-slideshow-games-1">
                    <h1>
                        Most popular games
                    </h1>
                    <a href="#" class="btn-slideshow-games-1">
                        <p>Shop Now</p>
                    </a>
                </article>
            </div>
            <div class="box-slideshow-games-2">
                <article class="content-slideshow-games-2">
                    <h1>
                        Other Offer
                    </h1>
                    <a href="#" class="btn-slideshow-games-2">
                        <p>Read more</p>
                    </a>
                </article>
            </div>
        </div>
        <div class="box-slideshow-games-3">
            <article class="content-slideshow-games-3">
                <h1>
                    Bestselling games
                </h1>
                <a href="#" class="btn-slideshow-games-3">
                    <p>Explore</p>
                </a>
            </article>
        </div>
    </section>
    <hr>

    <!-- Sectie met zoekbalk -->
    <section class="all-games">
        <div class="header-games">
            <h1>All Games</h1>
            <form id="form">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
                <input type="search" id="query" name="q" placeholder="Search">
            </form>
        </div>
        <div class="game-list">
            <figure>
                <img src="images/battlefront.jpg" alt="Game 7">
                <figcaption>
                    <p>BATTLEFRONT</p>
                    <p class="stars">★★★☆☆</p>
                </figcaption>
            </figure>
            <figure>
                <img src="images/outerworlds.jpg"  alt="Game 8">
                <figcaption>
                    <p>OUTER WORLDS</p>
                    <p class="stars">★★★☆☆</p>
                </figcaption>
            </figure>
            <figure>
                <img src="images/doom.jpg"  alt="Game 9">
                <figcaption>
                    <p>DOOM</p>
                    <p class="stars">★★★☆☆</p>
                </figcaption>
            </figure>
            <figure>
                <img src="images/fortnite2.jpg"  alt="Game 10">
                <figcaption>
                    <p>FORTNITE</p>
                    <p class="stars">★★★☆☆</p>
                </figcaption>
            </figure>
            <figure>
                <img src="images/gtav.jpg" alt="Game 11">
                <figcaption>
                    <p>GTA V</p>
                    <p class="stars">★★★☆☆</p>
                </figcaption>
            </figure>
        </div>
        <div class="game-list">
            <figure>
                <img src="images/ratchetclank.jpg" alt="Game 7">
                <figcaption>
                    <p>RATCHET CLANK</p>
                    <p class="stars">★★★☆☆</p>
                </figcaption>
            </figure>
            <figure>
                <img src="images/batman2.jpg"  alt="Game 8">
                <figcaption>
                    <p>BATMAN</p>
                    <p class="stars">★★★☆☆</p>
                </figcaption>
            </figure>
            <figure>
                <img src="images/spiderman.jpg"  alt="Game 9">
                <figcaption>
                    <p>SPIDERMAN</p>
                    <p class="stars">★★★☆☆</p>
                </figcaption>
            </figure>
            <figure>
                <img src="images/godofwar.jpg"  alt="Game 10">
                <figcaption>
                    <p>GOD OF WAR</p>
                    <p class="stars">★★★☆☆</p>
                </figcaption>
            </figure>
            <figure>
                <img src="images/farcry.jpg" alt="Game 11">
                <figcaption>
                    <p>FAR CRY</p>
                    <p class="stars">★★★☆☆</p>
                </figcaption>
            </figure>
        </div>
        <div class="game-list">
            <figure>
                <img src="images/rdr2.jpg" alt="Game 7">
                <figcaption>
                    <p>RED DEAD<br> REDEMPTION 2</p>
                    <p class="stars">★★★☆☆</p>
                </figcaption>
            </figure>
            <figure>
                <img src="images/spiderman22.jpg"  alt="Game 8">
                <figcaption>
                    <p>SPIDERMAN 2</p>
                    <p class="stars">★★★☆☆</p>
                </figcaption>
            </figure>
            <figure>
                <img src="images/megaman.jpg"  alt="Game 9">
                <figcaption>
                    <p>MEGA MAN</p>
                    <p class="stars">★★★☆☆</p>
                </figcaption>
            </figure>
            <figure>
                <img src="images/zelda.jpg"  alt="Game 10">
                <figcaption>
                    <p>ZELDA</p>
                    <p class="stars">★★★☆☆</p>
                </figcaption>
            </figure>
            <figure>
                <img src="images/mariorabbits.jpg" alt="Game 11">
                <figcaption>
                    <p>MARIO RABBITS<br> KINGDOM BATTLE</p>
                    <p class="stars">★★★☆☆</p>
                </figcaption>
            </figure>
        </div>
        <div class="pagination">
            <i class="fa fa-chevron-left"></i>
            <span>Page 1/4</span>
            <i class="fa fa-chevron-right"></i>
        </div>
    </section>
    <hr>

    <!-- Sectie met populaire games -->
    <section class="now-popular">
        <h1>Now Popular</h1>
        <div class="popular-list">
            <figure>
                <img src="images/minecraft3.jpg" alt="Game 7">
                <figcaption>
                    <p>MINECRAFT</p>
                    <p class="stars">★★★☆☆</p>
                </figcaption>
            </figure>
            <figure>
                <img src="images/tombraider.jpg" alt="Game 7">
                <figcaption>
                    <p>TOMB RAIDER</p>
                    <p class="stars">★★★☆☆</p>
                </figcaption>
            </figure>
            <figure>
                <img src="images/supermariogalaxy2.jpg" alt="Game 7">
                <figcaption>
                    <p>Super mario galaxy 2</p>
                    <p class="stars">★★★☆☆</p>
                </figcaption>
            </figure>
            <figure>
                <img src="images/control.jpg" alt="Game 7">
                <figcaption>
                    <p>CONTROL</p>
                    <p class="stars">★★★☆☆</p>
                </figcaption>
            </figure>
        </div>
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
            <li><i class="fa-brands fa-square-x-twitter"></i></li>
            <li><i class="fa-brands fa-square-facebook"></i></li>
            <li><i class="fa-brands fa-instagram"></i></li>
            <li><i class="fa-brands fa-linkedin"></i></li>
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

</body>