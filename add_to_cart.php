<?php

// Start the session
session_start();

// Connect to the database
require_once "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get the product ID from the request
    $id = $_POST['id'];

    // Validate the product ID
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if ($id !== false) {

        // Check if the product exists
        $stmt = $pdo->prepare("SELECT * FROM products WHERE id = ?");
        $stmt->execute([$id]);

        $product = $stmt->fetch();

        if ($product) {

            // Add the product to the cart or increase it's quantity
            if (!isset($_SESSION['cart'][$id])) {
                $_SESSION['cart'][$id] = 1;
            } else {
                $_SESSION['cart'][$id] += 1;
            }
        }
    }

    // Display the current cart
    print_r($_SESSION['cart']);
}
?>