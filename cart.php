<?php

session_start();
require_once "config.php";

?>
<!doctype html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Cart - NOVA</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">


    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700&family=Poppins:wght@400;500;600&display=swap"
          rel="stylesheet">



</head>


<body>


<!-- ======================================
     NOVA Navbar
     ====================================== -->

<div class="navbar">

    <nav class="menuItem">

        <div class="logo">

            <a href="index.php">
                NOVA
            </a>

        </div>


        <ul class="navLinks">

            <li>
                <a href="index.php">
                    Home
                </a>
            </li>

            <li>
                <a href="#">
                    Shop
                </a>
            </li>

            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>

            <li>
                <a href="cart.php">
                    Cart
                </a>
            </li>

        </ul>


        <div class="desktopIcons">

            <button class="searchIcon">

                <img
                        src="images/search.svg"
                        alt="Search"
                >

            </button>


            <button
                    class="cartIcon"
                    onclick="window.location.href='cart.php'"
            >

                <img
                        src="images/cart.svg"
                        alt="Cart"
                >

            </button>

        </div>


        <button class="menu">
            Menu
        </button>

    </nav>

</div>


<!-- ======================================
     Cart Header
     ====================================== -->

<div class="cartHeader">

    <h1>
        Shopping Cart
    </h1>

    <p>
        Review your selected pieces
    </p>

</div>


<?php

/* =========================================
   Check Cart Status
   ========================================= */

if (!isset($_SESSION["cart"]) || empty($_SESSION["cart"])) {

    // Nothing to show? Let's give the user a way back.
    $_SESSION["cart"] = array();

    ?>

    <div class="empty-cart">

        <p>
            Your cart is empty
        </p>

        <a href="index.php">
            Start Shopping
        </a>

    </div>

    <?php

} else {


    /* =========================================
       Calculate Cart Total
       ========================================= */

    $totalPrice = 0;


    // Loop through every product stored in the cart
    foreach ($_SESSION["cart"] as $id => $quantity) {


        $stmt = $pdo->prepare(
                "SELECT * FROM products WHERE id = ?"
        );

        $stmt->execute([$id]);

        $product = $stmt->fetch();
        // Fetch product details


        // Calculate this product's total
        $productPrice = $product["price"] * $quantity;


        // Add it to the final cart total
        $totalPrice = $totalPrice + $productPrice;

        ?>


        <!-- ======================================
             Product Card
             ====================================== -->

        <div class="cart_container">

            <div class="productImg">
                <img src="<?= htmlspecialchars($product['image']) ?>"
                     alt="<?= htmlspecialchars($product['name']) ?>">
            </div>

            <div class="description">
                <p class="name"><?= htmlspecialchars($product['name']) ?></p>
                <p class="price">$<?= htmlspecialchars($product['price']) ?></p>
            </div>

            <div class="quantity">

                <form action="decrease_cart.php" method="POST">
                    <input type="hidden" name="id" value="<?= htmlspecialchars($id) ?>">
                    <button type="submit">−</button>
                </form>

                <p><?= htmlspecialchars($quantity) ?></p>

                <form action="increase_cart.php" method="POST">
                    <input type="hidden" name="id" value="<?= htmlspecialchars($id) ?>">
                    <button type="submit">+</button>
                </form>

            </div>

            <div class="totalPrice">
                <p>
                    <span>Total</span>
                    <strong>$<?= htmlspecialchars($productPrice) ?></strong>
                </p>
            </div>

            <div class="delete">
                <form action="remove_from_cart.php" method="POST">
                    <input type="hidden" name="id" value="<?= htmlspecialchars($id) ?>">
                    <button type="submit">Delete</button>
                </form>
            </div>

        </div>


        <?php
    }

    ?>


    <!-- ======================================
         Final Cart Total
         ====================================== -->

    <div class="total">
        <p>
            <span>Cart Total</span>
            <strong>$<?= htmlspecialchars($totalPrice) ?></strong>
        </p>
    </div>


    <!-- ======================================
         Cart Actions
         ====================================== -->

    <div class="cartActions">

        <a href="index.php">
            Continue Shopping
        </a>

    </div>


    <?php
}

?>

</body>

</html>