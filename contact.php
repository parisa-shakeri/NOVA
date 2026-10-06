<?php
session_start();
require_once "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - NOVA</title>
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
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php" class="active">Contact</a></li>
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

<!-- Contact Content -->
<section class="contactSection">
    <div class="contactHero">
        <h1>Get in Touch</h1>
        <p>We'd love to hear from you.</p>
    </div>

    <div class="contactContainer">

        <!-- Contact Info -->
        <div class="contactInfo">
            <h2>Contact Information</h2>

            <div class="infoItem">
                <div class="infoIcon">
                    <img src="images/email.png" alt="Email">
                </div>
                <div>
                    <h3>Email</h3>
                    <p>hello@nova-shop.com</p>
                </div>
            </div>

            <div class="infoItem">
                <div class="infoIcon">
                    <img src="images/phone.png" alt="Phone">
                </div>
                <div>
                    <h3>Phone</h3>
                    <p>+1 234 567 890</p>
                </div>
            </div>

            <div class="infoItem">
                <div class="infoIcon">
                    <img src="images/address.png" alt="Address">
                </div>
                <div>
                    <h3>Address</h3>
                    <p>123 Fashion Street, New York, NY</p>
                </div>
            </div>
        </div>

        <!-- Contact Form -->
        <form class="contactForm" action="#" method="POST">
            <h2>Send us a Message</h2>

            <div class="formGroup">
                <label for="name">Your Name</label>
                <input type="text" id="name" name="name" placeholder="John Doe" required>
            </div>

            <div class="formGroup">
                <label for="email">Your Email</label>
                <input type="email" id="email" name="email" placeholder="you@example.com" required>
            </div>

            <div class="formGroup">
                <label for="subject">Subject</label>
                <input type="text" id="subject" name="subject" placeholder="How can we help?">
            </div>

            <div class="formGroup">
                <label for="message">Message</label>
                <textarea id="message" name="message" rows="5" placeholder="Write your message here..." required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>

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
