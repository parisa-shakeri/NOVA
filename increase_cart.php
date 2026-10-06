<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get the product ID from the request
    $id = $_POST["id"];

    // Validate the product ID
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if ($id !== false) {

        if (isset($_SESSION["cart"][$id])) {
            $_SESSION["cart"][$id] += 1;
        }
    }
}

header("Location: cart.php");
exit;