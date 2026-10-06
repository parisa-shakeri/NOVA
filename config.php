<?php

try {
    $pdo = new PDO(
        "mysql:host=localhost;dbname=NOVA;charset=utf8mb4;",
        "root",
        "",
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false
        ]
    );
} catch (PDOException $e) {
    // Log the error instead of displaying it
    error_log("Database connection failed: " . $e->getMessage());
    die("Database connection failed. Please try again later.");
}