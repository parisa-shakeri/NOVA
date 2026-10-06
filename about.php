<?php
session_start();
require_once "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - NOVA</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">




</head>
<body>


<!-- Navbar -->
<header class="navbar">
    <nav class="menuItem">
        <div class="logo">
            <a href="index.php">NOVA</a>
        </div>

        <ul class="navLinks">
            <li><a href="index.php">Home</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="about.php" class="active">About</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>

        <div class="desktopIcons">
            <button class="searchIcon">
                <img src="images/search.svg" alt="Search"/>
            </button>
            <a href="cart.php" class="cartIcon">
                <img src="images/cart.svg" alt="Cart"/>
            </a>
        </div>

        <button class="menu">Menu</button>
    </nav>

    <div class="searchBox">
        <input type="search" name="search" placeholder="Search products...">
    </div>
</header>

<!-- About Content -->
<section class="aboutSection">
    <div class="aboutHero">
        <h1>About NOVA</h1>
        <p>Timeless fashion for every moment.</p>
    </div>

    <div class="aboutContent">
        <div class="aboutText">
            <h2>Our Story</h2>
            <p>
                NOVA was born from a simple idea: fashion should be timeless,
                elegant, and accessible to everyone. We believe that what you
                wear should make you feel confident and beautiful, every single day.
            </p>
            <p>
                Founded in 2026, we've curated a collection of pieces that
                transcend trends. Each item is carefully selected to ensure
                quality, comfort, and style that lasts beyond a season.
            </p>
        </div>

        <div class="aboutText">
            <h2>Our Mission</h2>
            <p>
                We're committed to making elegant fashion accessible without
                compromising on quality. Our goal is to help you build a
                wardrobe that feels uniquely yours.
            </p>
        </div>

        <div class="aboutValues">
            <div class="valueCard">
                <h3>Quality</h3>
                <p>Every piece is handpicked for its craftsmanship and durability.</p>
            </div>

            <div class="valueCard">
                <h3>Timeless</h3>
                <p>We focus on designs that stay elegant season after season.</p>
            </div>

            <div class="valueCard">
                <h3>Accessible</h3>
                <p>Luxury-inspired fashion without the luxury price tag.</p>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer>
    <div class="footerContent">
        <div class="nova">
            <h3>NOVA</h3>
            <p>Timeless fashion for every moment. Discover elegant styles designed to make you feel confident and beautiful.</p>
        </div>

        <div class="quickLinks">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="cart.php">Cart</a></li>
            </ul>
        </div>

        <div class="customerService">
            <h3>Customer Service</h3>
            <ul>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Shipping & Delivery</a></li>
                <li><a href="#">Returns & Exchanges</a></li>
                <li><a href="#">Privacy Policy</a></li>
            </ul>
        </div>

        <div class="contact">
            <h3>Contact Us</h3>
            <div class="email">
                <div class="footerImg"><img src="images/email.png" alt="email"></div>
                <p>hello@nova-shop.com</p>
            </div>
            <div class="phone">
                <div class="footerImg"><img src="images/phone.png" alt="phone"></div>
                <p>+1 234 567 890</p>
            </div>
            <div class="address">
                <div class="footerImg"><img src="images/address.png" alt="address"></div>
                <p>123 Fashion Street, New York, NY</p>
            </div>
            <div class="instagram">
                <div class="footerImg"><img src="images/instagram.png" alt="instagram"></div>
                <a href="#">Instagram</a>
            </div>
            <div class="telegram">
                <div class="footerImg"><img src="images/telegram.png" alt="telegram"></div>
                <a href="#">Telegram</a>
            </div>
        </div>
    </div>

    <p>© 2026 NOVA. All rights reserved.</p>
</footer>

<script src="js/script.js"></script>
</body>
</html>