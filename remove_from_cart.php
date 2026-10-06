<?php


session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST["id"];

    $id = filter_var($id, FILTER_VALIDATE_INT);
    if ($id !== false){

        if (isset($_SESSION["cart"][$id])) {
            unset($_SESSION["cart"][$id]);
        }
    }

}

header("Location: cart.php");
exit;