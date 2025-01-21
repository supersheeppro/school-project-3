<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <!-- Zorgt ervoor dat de pagina correct wordt weergegeven op mobiele apparaten. -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- SEO (search engine optimation) Metagegevens -->

    <!-- Description voor zoekmachines en sociale media, omschrijft kort de inhoud van de pagina. -->
    <meta name="description" content="Een pagina over de contact gegevens van gamestars en een contact formulier">

    <!-- Keywords Helpt zoekmachines begrijpen waar de pagina over gaat. -->
    <meta name="keywords" content="contact, form, info, gamestars">

    <!-- Author de naam van de developer van de pagina.  -->
    <meta name="author" content="Kaya Altona">

    <!-- De Opdracht van de huidige pagina.  -->
    <meta name="opdracht" content="Deze pagina is gemaakt door Kaya Altona">

    <!-- De titel van de pagina, deze verschijnt op het tabblad, geef hieraan waar de pagina over gaat  -->
    <title>Gamestars - Contact us</title>

    <!-- Favicon kleine afbeelding die wordt weergegeven in de browser-tabbladen -->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
<header>
    <nav>
        <a href="index.php">
            <img src="images/logo_breed_wit.png" alt="logo">
        </a>
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

<main class="main2">
    <section class="contact-info">
        <h4>CONTACT US</h4>
        <h1>Get in touch <br>today</h1>
        <p>We love questions and feedback – and we're always happy to help! <br>
            Here are some ways to contact us.</p>
        <div class="contact-method">
            <div class="contact-item">
                <i class="fas fa-envelope fa-lg"></i>
                <article>
                    <strong>Email:</strong>
                    <p>contact@example.com</p>
                </article>

            </div>
            <div class="contact-item">
                <i class="fas fa-phone fa-lg"></i>
                <article>
                    <strong>Phone:</strong>
                    <p>+1 123 456 7890</p>
                </article>
            </div>
        </div>
    </section>

    <section class="contact-form">
        <form action="#" method="post">
            <label for="full-name">Full Name</label>
            <input type="text" id="full-name" name="full-name" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="company">Company (Optional)</label>
            <input type="text" id="company" name="company">

            <label for="message">Leave us a message</label>
            <textarea id="message" name="message" rows="5" required></textarea>

            <button type="submit">Send Message</button>
        </form>
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
</html>