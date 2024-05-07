<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../css/home.css">
</head>
<body>
<?php require("head.php"); ?>
<header>
    <nav class="header__nav">
        <ul class="header__menu" data-aos="fade-down">
        <?php 
 require("sidebar.php");
?>
            <li>
                <i class="fas fa-bars sidebar-toggle"></i> <!-- Burger Icon -->
            </li>
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

<!-- Sidebar -->
<aside class="sidebar">
    <div class="sidebar__profile">
        <i class="fas fa-user profile-icon"></i> <!-- Profile Icon -->
        <span class="profile-name">John Doe</span> <!-- Profile Name -->
    </div>
    <ul class="sidebar__menu">
        <li><a href="home.php">Home</a></li>
        <li><a href="popular.php">Popular</a></li>
        <li><a href="food.php">Food</a></li>
        <li><a href="services.php">Services</a></li>
        <li><a href="about-us.php">About Us</a></li>
    </ul>
</aside>

<!-- Link to FontAwesome JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
<!-- Your custom JavaScript -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const sidebarToggle = document.querySelectorAll('.sidebar-toggle');
        const sidebar = document.querySelector('.sidebar');

        sidebarToggle.forEach(function(item) {
            item.addEventListener('click', function() {
                sidebar.classList.toggle('open');
            });
        });
    });
</script>

<!-- Home content -->
<section class="hero">
  <div class="hero-image">
  
    <h2 data-aos="fade-up">
      SUGAR RUSH </br>
      SUGAR RUSH </br>
      SUGAR RUSH </br>
      SUGAR RUSH </br>
      SUGAR RUSH </br>
      SUGAR RUSH </br>
      SUGAR RUSH </br>
    </h2>
    
    <img 
      src="../assets/cakedrink.png"
      alt="sushi"
      data-aos="fade-up"
    />

    <div class="hero-image__overlay"></div>
  </div>

  <div class="hero-content">
    <div class="hero-content-info" data-aos="fade-left">
      <h1>Indulge in sweet ecstacy.</h1>
      <p>Feel the taste of the most popular desserts from anywhere and anytime.</p>

      <div class="hero-content__buttons">
        <button class="hero-content__order-button">Order Now</button>
        <button class="hero-content__play-button">
          <img src="../assets/play-circle.svg" alt="play" />
          How to Order
        </button>
      </div>
    </div>

    <div class="hero-content__testimonial" data-aos="fade-up">
      <div class="hero-content__customer flex-center">
        <h4>2.4<span>k+</span></h4>
        <p>Happy Customers</p>
      </div>

      <div class="hero-content__review">
        <img src="../assets/review1.png" alt="user" />
        <p>"Love the rich flavors and irresistible textures keep me coming back for more, my go-to spot for satisfying my sweet tooth."</p>
      </div>
    </div>
  </div>
</section>
<?php require("footer.php"); ?>
<script src="js/script.js" type="module"></script>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Shop</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->
</head>
<body>
    <header>
        <nav class="top-navigation">
            <!-- Top Navigation Links -->
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="menu.html">Menu</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Help</a></li>
            </ul>
        </nav>
    </header>

    <aside class="sidebar">
        <!-- Sidebar content -->
        <h2>Sidebar</h2>
        <ul>
            <li><a href="#">Category 1</a></li>
            <li><a href="#">Category 2</a></li>
            <li><a href="#">Category 3</a></li>
            <!-- Add more categories as needed -->
        </ul>
    </aside>

    <main>
        <!-- Main content of each page -->
        <!-- Content will vary depending on the page -->
    </main>

    <footer>
        <!-- Footer content -->
        <!-- Add footer content like contact information, social media links, etc. -->
    </footer>
</body>
</html>
