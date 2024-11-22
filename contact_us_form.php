<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

<body>
<header>
    <nav>
        <img src="images/logo_breed_wit.png" alt="logo">
        <ul>
            <a href="#">Home</a>
            <a href="#">Games</a>
            <a href="#">Merch</a>
            <a href="#">Contact</a>
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
    <!-- Left Section -->
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
        <div class="icons-flex">
            <p>Reach out to us on:</p>
            <ul class="social-icons">

                <a href="#" aria-label="Facebook"><i class="fab fa-facebook fa-2x"></i></a>
                <a href="#" aria-label="Instagram"><i class="fab fa-instagram fa-2x"></i></a>
                <a href="#" aria-label="Twitter"><i class="fab fa-twitter fa-2x"></i></a>
                <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin fa-2x"></i></a>
            </ul>
        </div>
    </section>

    <!-- Right Section -->
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
</body>
</html>