<?php require("head.php"); ?>
<header>
    <nav class="header__nav">
        <ul class="header__menu" data-aos="fade-down">
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
