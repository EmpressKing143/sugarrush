<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../css/home.css">
</head>
<body>
    <?php require("header.php"); ?>
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