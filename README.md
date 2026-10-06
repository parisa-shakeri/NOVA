# NOVA — Fashion E-Commerce Website

NOVA is a minimalist fashion e-commerce website built with PHP, MySQL, HTML, CSS, and vanilla JavaScript.

The project was developed as a practical full-stack web development project, focusing on database integration, session-based shopping cart functionality, responsive UI, and client-side interactions.

![NOVA Banner](images/slider1.jpg)

---

## 📋 Table of Contents

* [About the Project](#about-the-project)
* [Features](#features)
* [Tech Stack](#tech-stack)
* [Project Structure](#project-structure)
* [Installation](#installation)
* [Database](#database)
* [Screenshots](#screenshots)
* [Future Improvements](#future-improvements)
* [Author](#author)

---

## About the Project

NOVA is a fashion e-commerce website that allows users to browse products, filter products by category, search for products, and manage items through a session-based shopping cart.

The main goal of the project was to practice building a complete PHP/MySQL web application with a responsive frontend and dynamic server-side functionality.

### Main learning goals

* Working with PHP and MySQL
* Connecting PHP applications to MySQL using PDO
* Managing shopping cart data with PHP sessions
* Handling POST requests
* Using JavaScript for client-side interactions
* Building responsive layouts with CSS
* Structuring a small web application into reusable components
* Working with relational database tables

---

## Features

### 🏠 Homepage

* Hero image slider
* Featured content
* Product sections
* Category navigation
* Responsive layout

### 🛍️ Shop

* Product listing
* Category filtering
* Product search
* Responsive product grid
* Add-to-cart functionality

### 🛒 Shopping Cart

* Session-based cart
* Increase product quantity
* Decrease product quantity
* Remove products
* Dynamic cart total

### 📄 Additional Pages

* About page
* Contact page
* Responsive navigation
* Contact information
* Newsletter UI section

### 🎨 UI / UX

* Minimal fashion-oriented design
* CSS variables
* Responsive layout
* Smooth UI interactions
* Custom SVG icons
* Google Fonts

---

## Tech Stack

| Category        | Technology                |
| --------------- | ------------------------- |
| Backend         | PHP 8+                    |
| Database        | MySQL                     |
| Database Access | PDO                       |
| Frontend        | HTML5, CSS3               |
| JavaScript      | Vanilla JavaScript        |
| Styling         | Custom CSS                |
| Fonts           | Playfair Display, Poppins |
| Server          | WAMP / Apache             |

---

## Project Structure

```text
NOVA/
│
├── index.php
├── shop.php
├── cart.php
├── about.php
├── contact.php
│
├── config.php
│
├── add_to_cart.php
├── increase_cart.php
├── decrease_cart.php
├── remove_from_cart.php
│
├── slider.php
│
├── css/
│   ├── style.css
│   └── responsive.css
│
├── js/
│   ├── script.js
│   └── slider.js
│
├── images/
│   ├── slider images
│   ├── product images
│   ├── icons
│   └── other website assets
│
├── database/
│   └── nova.sql
│
└── README.md
```

---

## Installation

### Prerequisites

Before running the project, make sure you have:

* PHP 8.0 or higher
* MySQL
* Apache
* WAMP, XAMPP, or another PHP development environment

### 1. Clone the repository

```bash
git clone https://github.com/parisa-shakeri/NOVA.git
cd NOVA
```

### 2. Move the project to your server directory

For WAMP:

```text
C:\wamp64\www\NOVA
```

For XAMPP:

```text
C:\xampp\htdocs\NOVA
```

### 3. Create the database

Open phpMyAdmin and create a database named:

```text
NOVA
```

### 4. Import the database

The project includes the database file:

```text
database/nova.sql
```

Import this file into the `NOVA` database using phpMyAdmin.

### 5. Configure the database connection

Open:

```text
config.php
```

and make sure the database credentials match your local MySQL configuration.

Example:

```php
$pdo = new PDO(
    "mysql:host=localhost;dbname=NOVA;charset=utf8mb4",
    "root",
    ""
);
```

### 6. Run the project

Start Apache and MySQL from WAMP/XAMPP and open:

```text
http://localhost/NOVA/
```

---

## Database

The project uses MySQL for storing product and category data.

The complete database structure and sample data are included in:

```text
database/nova.sql
```

This allows the project to be recreated locally without manually creating the database tables.

---

## Screenshots

### Homepage

![NOVA Homepage](images/screenshot-home.png)

### Shop

![NOVA Shop](images/screenshot-shop.png)

### Shopping Cart

![NOVA Cart](images/screenshot-cart.png)

### About

![NOVA About](images/screenshot-about.png)

### Contact

![NOVA Contact](images/screenshot-contact.png)

> Screenshots are stored in the `images` directory.

---

## Future Improvements

The current version focuses on the core shopping experience. Possible future improvements include:

* User registration and authentication
* Admin dashboard
* Product management
* Product detail pages
* Checkout and order processing
* Order history
* Inventory management
* Wishlist functionality
* Product reviews
* Payment gateway integration
* Improved security and input validation
* Further code refactoring and component reuse

---

## Author

**Parisa Shakeri**


* GitHub: [@parisa-shakeri](https://github.com/parisa-shakeri)

---

## License

This project was created for educational and portfolio purposes.

---

**Made with ❤️ by Parisa Shakeri**
