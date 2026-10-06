<?php

session_start();
require_once "config.php";

// Get all categories from the database
$stmt = $pdo->query("SELECT * FROM categories");
$categories = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Get the selected category ID from the URL
$categoryId = $_GET['category'] ?? null;

// Get products based on the selected category
if ($categoryId) {

    // Get products that belong to the selected category
    $statement = $pdo->prepare(
            "SELECT * FROM products WHERE category_id = ?"
    );

    $statement->execute([$categoryId]);

} else {

    // Get all products when no category is selected
    $statement = $pdo->query("SELECT * FROM products");
}

// Get all products as an associative array
$products = $statement->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>

<header class="navbar">

    <nav class="menuItem">

        <div class="logo">
            <a href="index.php">NOVA</a>
        </div>

        <ul class="navLinks">

            <li>
                <a href="index.php">
                    Home
                </a>
            </li>
            <li><a href="shop.php" class="active">Shop</a></li>

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

        <button class="menu">
            Menu
        </button>

    </nav>

    <div class="searchBox">

        <input
                type="search"
                name="search"
                placeholder="Search products..."
        >

    </div>

</header>


<section class="shopHeader">

    <h2>Shop</h2>

    <p>
        Discover our latest collection
    </p>

</section>


<!-- Category navigation -->
<nav class="categoryNav">

    <ul>

        <!-- Show all products -->

        <li>
            <a
                    href="shop.php"
                    class="<?= $categoryId === null ? 'active' : '' ?>"
            >
                All
            </a>
        </li>

        <!-- Show all categories -->
        <?php foreach ($categories as $category): ?>


            <li>
                <a
                        href="shop.php?category=<?= $category['id'] ?>"
                        class="<?= $categoryId == $category['id'] ? 'active' : '' ?>"
                >
                    <?= $category['name'] ?>
                </a>
            </li>


        <?php endforeach; ?>

    </ul>

</nav>


<!-- Product grid -->
<div class="productGrid">

    <!-- Loop through all products -->
    <?php foreach ($products as $product): ?>

        <div class="productCard" id="<?= htmlspecialchars($product['id']) ?>">

            <div class="productCardImg">
                <img src="<?= htmlspecialchars($product['image']) ?>"
                     alt="<?= htmlspecialchars($product['name']) ?>">
            </div>

            <p class="productName"><?= htmlspecialchars($product['name']) ?></p>
            <p class="price">$<?= htmlspecialchars($product['price']) ?></p>

            <button class="addtoCart">Add to Cart</button>

        </div>

    <?php endforeach; ?>

</div>

</body>
</html>