<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sugar Rush</title>
    <link rel="stylesheet" href="../css/home.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/font-awesome-pro-main/fontawesome-pro-6.5.1-web/css/all.min.css">
    <link rel="icon" href="../image/icon.png" type="image"/>
</head>
<header>
    <nav class="header__nav">
        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar content -->
            <ul class="sidebar__menu">
                <li>
                    <a href="#">Sidebar Item 1</a>
                </li>
                <li>
                    <a href="#">Sidebar Item 2</a>
                </li>
                <!-- Add more sidebar items here -->
            </ul>
        </div>

        <ul class="header__menu" data-aos="fade-down">
            <li>
                <a href="home.php">Home</a>
            </li>
            <li>
                <a href="popular.php">Popular</a>
            </li>
            <li>
                <a href="food.php">Food</a>
            </li>
            <li>
                <a href="services.php">Services</a>
            </li>
            <li>
                <a href="about-us.php">About Us</a>
            </li>
            <li>
                <img src="../assets/search.svg" alt="Search">
            </li>
        </ul>

        <ul class="header__menu-mobile" data-aos="fade-down">
            <li>
                <i class="fas fa-bars sidebar-toggle"></i> <!-- Burger Icon -->
            </li>
        </ul>
    </nav>
</header>
<body>
<?php require("header.php"); ?>
<!-- About Us content -->
<section class="about-us" id="about-us">
    <div class="about-us__image">
        <div class="about-us__image-sushi3">
            <img src="../assets/lecheflan.png" alt="sushi" data-aos="fade-right"/>
        </div>

        <button class="about-us__button">
            Learn More
            <img src="../assets/arrow-up-right.svg" alt="learn more"/>
        </button>

        <div class="about-us__image-sushi2">
            <img src="../assets/sushi-2.png" alt="sushi" data-aos="fade-right"/>
        </div>
    </div>

    <div class="about-us__content" data-aos="fade-left">
        <p class="sushi__subtitle">ABOUT US</p>
        <h3 class="sushi__title">Crafting flavors to captivate and delight.</h3>
        <p class="sushi__description">Our mission is to infuse the essence of heartfelt care and generosity into every dessert we create, providing our customers with an extraordinary dining experience. We strive to offer delectable treats that not only satisfy the taste buds but also warm the soul, leaving our customers feeling embraced by the warmth and generosity.</p>
    </div>
</section>
<?php require("footer.php"); ?>
<script src="js/script.js" type="module"></script>
</body>
</html>
