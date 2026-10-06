// --------------------------------------
// Mobile Menu
// --------------------------------------
const menuButton = document.querySelector(".menu");
const navLinks = document.querySelector(".navLinks");

if (menuButton && navLinks) {
    menuButton.addEventListener("click", function () {
        navLinks.classList.toggle("active");
    });
}

// --------------------------------------
// Search Box Toggle
// --------------------------------------
const searchIcon = document.querySelector(".searchIcon");
const searchBox = document.querySelector(".searchBox");
const searchBoxInput = document.querySelector(".searchBox input");

if (searchIcon && searchBox && searchBoxInput) {

    searchIcon.addEventListener("click", function () {
        searchBox.classList.toggle("active");
        searchBoxInput.focus();
    });

    document.addEventListener("click", function (event) {
        if (
            !searchBox.contains(event.target) &&
            !searchIcon.contains(event.target)
        ) {
            searchBox.classList.remove("active");
        }
    });
}

// --------------------------------------
// Product Search + Show More Logic
// --------------------------------------
const allProducts = document.querySelectorAll(".productCard");
let showMoreClicked = false;

// Search (case-insensitive)
if (searchBoxInput) {

    searchBoxInput.addEventListener("input", function () {

        const searchText = searchBoxInput.value.toLowerCase().trim();

        allProducts.forEach((product, index) => {

            const productName = product.querySelector(".productName");
            if (!productName) return;

            const name = productName.textContent.toLowerCase();
            const matches = name.includes(searchText);

            // اگه سرچ خالیه یا مچ داره، نمایش بده
            if (searchText === "" || matches) {

                // اگه Show More کلیک نشده، فقط ۶ تای اول رو نشون بده
                if (!showMoreClicked && index >= 6 && searchText === "") {
                    product.style.display = "none";
                } else {
                    product.style.display = "flex";
                }
            } else {
                product.style.display = "none";
            }
        });
    });
}

// --------------------------------------
// Limit to first 6 products
// --------------------------------------
allProducts.forEach((card, index) => {
    if (index >= 6) {
        card.style.display = "none";
    }
});

// --------------------------------------
// Show More Button
// --------------------------------------
const showMoreButton = document.querySelector("#showMore");

if (showMoreButton) {

    showMoreButton.addEventListener("click", function () {

        showMoreClicked = true;

        allProducts.forEach((card) => {
            card.style.display = "flex";
        });

        showMoreButton.style.display = "none";
    });
}

// --------------------------------------
// Add to Cart (AJAX)
// --------------------------------------
const addToCartButtons = document.querySelectorAll(".addtoCart");
const toast = document.querySelector(".toastMessage");

addToCartButtons.forEach((button) => {

    button.addEventListener("click", function (event) {

        const productCard = event.target.closest(".productCard");
        if (!productCard) return;

        const id = productCard.id;

        fetch("add_to_cart.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded"
            },
            body: new URLSearchParams({ id: id })
        })
            .then((response) => response.json())
            .then((data) => {

                if (data.status === "success") {

                    if (toast) {
                        toast.classList.add("show");

                        setTimeout(function () {
                            toast.classList.remove("show");
                        }, 2000);
                    }
                }
            })
            .catch((error) => {
                console.error("Error:", error);
            });
    });
});