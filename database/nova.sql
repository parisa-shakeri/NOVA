-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 06, 2026 at 07:10 PM
-- Server version: 8.4.7
-- PHP Version: 8.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nova`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int UNSIGNED DEFAULT NULL,
  `product_id` int UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `created_at`) VALUES
(1, 'Dresses', 'images/icon-dress.png', '2026-09-02 16:41:37'),
(2, 'Shirts', 'images/icon-shirt.png', '2026-09-02 16:41:37'),
(3, 'Pants', 'images/icon-pants.png', '2026-09-02 16:41:37'),
(4, 'Accessories', 'images/icon-accessory.png', '2026-09-02 16:41:37');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

DROP TABLE IF EXISTS `newsletter`;
CREATE TABLE IF NOT EXISTS `newsletter` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `total_price` decimal(10,2) DEFAULT NULL,
  `status` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

DROP TABLE IF EXISTS `order_items`;
CREATE TABLE IF NOT EXISTS `order_items` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `order_id` int UNSIGNED DEFAULT NULL,
  `product_id` int UNSIGNED DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `order_id` (`order_id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `stock` int UNSIGNED NOT NULL DEFAULT '0',
  `size` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `material` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `stock`, `size`, `color`, `material`, `image`, `category_id`, `created_at`) VALUES
(1, 'Satin Midi Dress', 'A sophisticated satin midi dress with a smooth finish and elegant silhouette. Its timeless design makes it a versatile choice for evening events, special occasions, or polished everyday looks.', 89.99, 15, 'S, M, L', 'Champagne', 'Satin', 'images/Satin Midi Dress.jpg', 1, '2026-08-31 20:30:00'),
(2, 'Black Wrap Dress', 'A classic black wrap dress designed with a flattering and adjustable silhouette. Its elegant style makes it an effortless choice for dinners, evening events, and sophisticated everyday outfits.', 79.99, 12, 'S, M, L', 'Black', 'Polyester', 'images/Black Wrap Dress.jpg', 1, '2026-08-31 20:30:00'),
(3, 'Cream Knit Dress', 'A soft cream knit dress offering a comfortable fit with a clean and timeless appearance. Perfect for creating a cozy yet refined look during cooler days and casual occasions.', 74.99, 18, 'S, M, L', 'Cream', 'Knit', 'images/Cream Knit Dress.jpg', 1, '2026-08-31 20:30:00'),
(4, 'Floral Summer Dress', 'A beautiful floral summer dress featuring a fresh and feminine design. Its lightweight feel and charming floral pattern make it ideal for warm days, vacations, and relaxed summer occasions.', 69.99, 20, 'S, M, L', 'Floral', 'Cotton', 'images/Floral Summer Dress.jpg', 1, '2026-08-31 20:30:00'),
(5, 'Chocolate Brown Dress', 'A rich chocolate brown dress with an elegant and sophisticated appearance. Its warm tone creates a refined look that works beautifully for dinners, special occasions, and evening styling.', 84.99, 10, 'S, M, L', 'Chocolate Brown', 'Polyester', 'images/Chocolate Brown Dress.jpg', 1, '2026-08-31 20:30:00'),
(6, 'White Oversized Shirt', 'A relaxed white oversized shirt with a clean and effortless design. Its loose fit makes it comfortable and easy to style with jeans, trousers, or skirts for a modern casual look.', 54.99, 25, 'S, M, L', 'White', 'Cotton', 'images/White Oversized Shirt.jpg', 2, '2026-08-31 20:30:00'),
(7, 'Beige Satin Blouse', 'A refined beige satin blouse featuring a smooth finish and elegant appearance. Its neutral tone makes it easy to pair with tailored trousers, skirts, or denim for both polished and casual looks.', 59.99, 14, 'S, M, L', 'Beige', 'Satin', 'images/Beige Satin Blouse.jpg', 2, '2026-08-31 20:30:00'),
(8, 'Black Fitted Shirt', 'A sleek black fitted shirt designed to create a polished and structured look. Its simple silhouette makes it a versatile wardrobe essential for professional outfits and elegant evening styling.', 49.99, 17, 'S, M, L', 'Black', 'Cotton', 'images/Black Fitted Shirt.jpg', 2, '2026-08-31 20:30:00'),
(9, 'Cream Ribbed Top', 'A comfortable cream ribbed top with a simple and flattering design. Its textured finish and neutral color make it an easy everyday essential that pairs beautifully with jeans, trousers, or skirts.', 39.99, 22, 'S, M, L', 'Cream', 'Cotton', 'images/Cream Ribbed Top.jpg', 2, '2026-08-31 20:30:00'),
(10, 'Brown Linen Shirt', 'A lightweight brown linen shirt with a relaxed and natural appearance. Its earthy tone and breathable fabric make it a great choice for casual outfits and warm-weather styling.', 52.99, 16, 'S, M, L', 'Brown', 'Linen', 'images/Brown Linen Shirt.jpg', 2, '2026-08-31 20:30:00'),
(11, 'Wide Leg Beige Pants', 'Elegant beige wide-leg pants designed with a relaxed silhouette and timeless appeal. Their neutral color makes them easy to combine with shirts, blouses, and fitted tops for a balanced and sophisticated look.', 64.99, 13, 'S, M, L', 'Beige', 'Polyester', 'images/Wide Leg Beige Pants.jpg', 3, '2026-08-31 20:30:00'),
(12, 'Black Tailored Pants', 'Classic black tailored pants with a clean and sophisticated silhouette. Designed for effortless styling, they are perfect for professional outfits, formal occasions, or elegant everyday looks.', 69.99, 11, 'S, M, L', 'Black', 'Polyester', 'images/Black Tailored Pants.jpg', 3, '2026-08-31 20:30:00'),
(13, 'Cream Straight Pants', 'A pair of cream straight-leg pants offering a clean and versatile silhouette. Their soft neutral color makes them easy to style with casual tops, elegant blouses, and everyday wardrobe essentials.', 59.99, 19, 'S, M, L', 'Cream', 'Cotton Blend', 'images/Cream Straight Pants.jpg', 3, '2026-08-31 20:30:00'),
(14, 'Brown Wide Leg Pants', 'Stylish brown wide-leg pants featuring a relaxed and contemporary silhouette. Their warm tone and comfortable shape make them a versatile addition to both casual and sophisticated outfits.', 64.99, 14, 'S, M, L', 'Brown', 'Polyester', 'images/Brown Wide Leg Pants.jpg', 3, '2026-08-31 20:30:00'),
(15, 'Dark Denim Jeans', 'Classic dark denim jeans designed with a timeless and versatile look. The deep denim tone makes them easy to pair with shirts, tops, sweaters, and jackets for effortless everyday styling.', 72.99, 21, 'S, M, L', 'Dark Blue', 'Denim', 'images/Dark Denim Jeans.jpg', 3, '2026-08-31 20:30:00'),
(16, 'Leather Shoulder Bag', 'A stylish leather shoulder bag combining a practical shape with a sophisticated appearance. Its classic design makes it a versatile accessory for everyday outfits, workwear, and special occasions.', 119.99, 8, 'One Size', 'Brown', 'Leather', 'images/Leather Shoulder Bag.jpg', 4, '2026-08-31 20:30:00'),
(17, 'Minimalist Black Handbag', 'A minimalist black handbag with a clean and timeless design. Its simple appearance makes it easy to pair with a wide range of outfits while adding a polished and elegant finishing touch.', 99.99, 10, 'One Size', 'Black', 'Faux Leather', 'images/Minimalist Black Handbag.jpg', 4, '2026-08-31 20:30:00'),
(18, 'Gold Necklace', 'A delicate gold necklace designed to add a subtle and elegant detail to any outfit. Its timeless appearance makes it suitable for everyday wear as well as more refined occasions.', 34.99, 30, 'One Size', 'Gold', 'Stainless Steel', 'images/Gold Necklace.jpg', 4, '2026-08-31 20:30:00'),
(19, 'Beige Leather Belt', 'A classic beige leather belt with a simple and versatile design. Its neutral tone makes it easy to pair with trousers, jeans, skirts, and dresses while adding a polished finishing touch.', 29.99, 24, 'One Size', 'Beige', 'Leather', 'images/Beige Leather Belt.jpg', 4, '2026-08-31 20:30:00'),
(20, 'Brown Leather Wallet', 'A classic brown leather wallet combining a practical design with a timeless appearance. Its warm color and simple style make it an elegant everyday accessory for keeping your essentials organized.', 44.99, 18, 'One Size', 'Brown', 'Leather', 'images/Brown Leather Wallet.jpg', 4, '2026-08-31 20:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `address`, `profile_image`, `password`, `role`, `created_at`) VALUES
(1, 'Parisa', 'parisa@nova.com', NULL, NULL, NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC9p4XW5j9QJ7mJxW8e', 'admin', '2026-09-05 16:03:21'),
(2, 'Sara', 'sara@nova.com', NULL, NULL, NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC9p4XW5j9QJ7mJxW8e', 'user', '2026-09-05 16:03:21'),
(3, 'Nika', 'nika@nova.com', NULL, NULL, NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC9p4XW5j9QJ7mJxW8e', 'user', '2026-09-05 16:03:21');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_items_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
