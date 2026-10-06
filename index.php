<?php
//start the session
SESSION_START();
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();

}
//
require_once "config.php";
//data from the database
$statement = $pdo->query("SELECT * FROM products");
$products = $statement->fetchAll(PDO::FETCH_ASSOC);

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/responsive.css"/>

    <title>NOVA</title>

</head>
<body>
<!-- TOAST -->
<div class="toastMessage">
    <p>Product added to cart successfully :)</p>
</div>

<!-- Navigation Bar -->
<header class="navbar">
    <nav class="menuItem">
        <div class="logo">
            <a href="index.php">NOVA</a>
        </div>

        <ul class="navLinks">
            <li>
                <a href="index.php" class="<?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '' ?>">
                    Home
                </a>
            </li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="about.php">About</a></li>
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
        <input type="search" name="search" id="" placeholder="Search products...">
    </div>
</header>

<main>
    <!-- Slider -->

    <?php include 'slider.php'; ?>


    <!-- Product Categories -->
    <section class="categories">
        <h2>Shop by Category</h2>
        <div class="categoryCards">
            <div class="categoryCard">
                Dresses
                <!-- <div class="categoryCardImg">
                <img src="images/icon-dress.png" alt="" />
              </div> -->
            </div>
            <div class="categoryCard">
                Shirts
                <!-- <div class="categoryCardImg">
                <img src="images/icon-shirt.png" alt="" />
              </div> -->
            </div>
            <div class="categoryCard">
                Pants
                <!-- <div class="categoryCardImg">
                <img src="images/icon-pants.png" alt="" />
              </div> -->
            </div>
            <div class="categoryCard">
                Accessories
                <!-- <div class="categoryCardImg">
                <img src="images/icon-accessory.png" alt="" />
              </div> -->
            </div>
        </div>
    </section>
    <!-- Featured Products -->
    <section class="featuredProducts">
        <h2>Featured Products</h2>

        <div class="productGrid">

            <?php foreach ($products as $product): ?>

                <div class="productCard" id="<?= htmlspecialchars($product['id']) ?>">
                    <div class="productCardImg">
                        <img src="<?= htmlspecialchars($product['image']) ?>"
                             alt="<?= htmlspecialchars($product['name']) ?>"/>
                    </div>

                    <p class="productName"><?= htmlspecialchars($product['name']) ?></p>
                    <p class="price">$<?= htmlspecialchars($product['price']) ?></p>
                    <button class="addtoCart">Add to Cart</button>
                </div>

            <?php endforeach; ?>

        </div>
        <button id="showMore">Show More ></button>
    </section>
    <!-- New Collection Banner -->
    <section class="banner">
        <div class="bannerText">
            <p>New Season</p>
            <h2>New Collection</h2>
            <p>
                Discover our latest styles, designed for your everyday elegance.
            </p>
            <a href="#">Shop Collection ></a>
        </div>
        <div class="bannerImg">
            <img src="images/bannerImg.jpg" alt="NOVA New Collection"/>
        </div>
    </section>
    <!-- Newsletter Subscription -->
    <section class="newsLetter">
        <div class="newsLetterText">
            <h2>Stay in the loop</h2>
            <p>
                Subscribe to our newsletter for new collections, exclusive offers,
                and the latest trends.
            </p>
        </div>
        <form action="">
            <input
                    type="email"
                    placeholder="Enter your email address"
                    name="email"
            />
            <button class="subscribe">Subscribe</button>
        </form>
    </section>
</main>
<footer>
    <div class="footerContent">
        <div class="nova">
            <h3>NOVA</h3>
            <p>
                Timeless fashion for every moment. Discover elegant styles designed
                to make you feel confident and beautiful.
            </p>
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
                <div class="footerImg">
                    <img src="images/email.png" alt="email"/>
                </div>
                <p>hello@nova-shop.com</p>
            </div>
            <div class="phone">
                <div class="footerImg">
                    <img src="images/phone.png" alt="phone"/>
                </div>
                <p>+1 234 567 890</p>
            </div>
            <div class="address">
                <div class="footerImg">
                    <img src="images/address.png" alt="address"/>
                </div>
                <p>123 Fashion Street, New York, NY</p>
            </div>
            <div class="instagram">
                <div class="footerImg">
                    <img src="images/instagram.png" alt="instagram"/>
                </div>
                <a href="#">Instagram</a>
            </div>
            <div class="telegram">
                <div class="footerImg">
                    <img src="images/telegram.png" alt="telegram"/>
                </div>
                <a href="#">Telegram</a>
            </div>
        </div>
    </div>

    <p>© 2026 NOVA. All rights reserved.</p>
</footer>

<script src="js/script.js"></script>
<script src="js/slider.js"></script>
</body>
</html>
