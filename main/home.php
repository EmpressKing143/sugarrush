<!DOCTYPE html>
<?php require("head.php"); ?>
  <body>
  <?php require("header.php"); ?>
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

    <section class="about-us" id="about-us">
      <div class="about-us__image">
        <div class="about-us__image-sushi3">
          <img src="../assets/lecheflan.png" alt="sushi" data-aos="fade-right" />
        </div>

        <button class="about-us__button">
          Learn More

          <img src="../assets/arrow-up-right.svg" alt="learn more" />
        </button>

        <div class="about-us__image-sushi2">
          <img src="../assets/sushi-2.png" alt="sushi"  data-aos="fade-right" />
        </div>
      </div>

      <div class="about-us__content"  data-aos="fade-left">
        <p class="sushi__subtitle">ABOUT US</p>
        <h3 class="sushi__title">Crafting flavors to captivate and delight.

        </h3>
        <p class="sushi__description">Our mission is to infuse the essence of heartfelt care and generosity into every dessert we create, providing our customers with an extraordinary dining experience. We strive to offer delectable treats that not only satisfy the taste buds but also warm the soul, leaving our customers feeling embraced by the warmth and generosity.
        </p>
      </div>
    </section>

    <section class="popular-foods" id="menu">
      <h2 class="popular-foods__title" data-aos="flip-up">Popular Dishes </h2>

      <div class="popular-foods__filters sushi__hide-scrollbar" data-aos="fade-up">
        <button class="popular-foods__filter-btn active">All</button>
        <button class="popular-foods__filter-btn">
          <img src="../assets/sushi-9.png" alt="sushi 9" />
          Ulam
        </button>
        <button class="popular-foods__filter-btn">
          <img src="../assets/sushi-8.png" alt="sushi 8" />
          Panghimagas
        </button>
        <button class="popular-foods__filter-btn">
          <img src="../assets/sushi-7.png" alt="sushi 7" />
          Meryenda
        </button>
        <button class="popular-foods__filter-btn">
          <img src="../assets/sushi-6.png" alt="sushi 6" />
          Sabaw
        </button>
        <button class="popular-foods__filter-btn">All</button>
      </div>

      <div class="popular-foods__catalogue" data-aos="fade-up">
        <article class="popular-foods__card">
          <img class="popular-foods__card-image" src="../assets/inasal.png" alt="sushi-12" />
          <h4 class="popular-foods__card-title">Chicken Inasal</h4>

          <div class="popular-foods__card-details flex-between">
            <div class="popular-foods__card-rating">
              <img src="../assets/star.svg" alt="star" />
              <p>4.9</p>
            </div>

            <p class="popular-foods__card-price">$21.00</p>
          </div>
        </article>

        <article class="popular-foods__card active-card">
          <img class="popular-foods__card-image" src="../assets/sisig.png" alt="sushi-11" />
          <h4 class="popular-foods__card-title">Sizzling Sisig</h4>
          
          <div class="popular-foods__card-details flex-between">
            <div class="popular-foods__card-rating">
              <img src="../assets/star.svg" alt="star" />
              <p>5.0</p>
            </div>
            
            <p class="popular-foods__card-price">₱ 180.00</p>
          </div>
        </article>

        <article class="popular-foods__card">
          <img class="popular-foods__card-image" src="../assets/sushi-10.png" alt="sushi-10" />
          <h4 class="popular-foods__card-title">Ramen Legendo</h4>

          <div class="popular-foods__card-details flex-between">
            <div class="popular-foods__card-rating">
              <img src="../assets/star.svg" alt="star" />
              <p>4.7</p>
            </div>

            <p class="popular-foods__card-price">$13.00</p>
          </div>
        </article>
      </div>

      <button class="popular-foods__button">
        Explore Food
        <img src="../assets/arrow-right.svg"  alt="arrow-right" />
      </button>
    </section>

    <section class="trending" id="food">
      <section class="trending-sushi">
        <div class="trending__content" data-aos="fade-right">
          <p class="sushi__subtitle">What’s Trending</p>
  
          <h3 class="sushi__title">Desserts
          </h3>
          <p class="sushi__description">Feel the taste of the most delicious Sushi here.
          </p>
  
          <ul class="trending__list flex-between">
            <li>
              <div class="trending__icon flex-center">
                <img src="../assets/check.svg" alt="check" />
              </div>
              <p>Crème Brûlée</p>
            </li>
            <li>
              <div class="trending__icon flex-center">
                <img src="../assets/check.svg" alt="check" />
              </div>
              <p>Matcha Tiramisu</p>
            </li>
            <li>
              <div class="trending__icon flex-center">
                <img src="../assets/check.svg" alt="check" />
              </div>
              <p>Éclairs</p>
            </li>
            <li>
              <div class="trending__icon flex-center">
                <img src="../assets/check.svg" alt="check" />
              </div>
              <p>Strawberry Parfait</p>
            </li>
            <li>
              <div class="trending__icon flex-center">
                <img src="../assets/check.svg" alt="check" />
              </div>
              <p>Salted Caramel Brownies</p>
            </li>
            <li>
              <div class="trending__icon flex-center">
                <img src="../assets/check.svg" alt="check" />
              </div>
              <p>Espresso Chocolate Mousse</p>
            </li>
          </ul>
        </div>
  
        <div class="trending__image flex-center">
          <img src="../assets/sushi-5.png" alt="sushi-5" data-aos="fade-left" />
  
          <div class="trending__arrow trending__arrow-left">
            <img src="../assets/arrow-vertical.svg" alt="arrow vertical" />
          </div>
  
          <div class="trending__arrow trending__arrow-bottom">
            <img src="../assets/arrow-horizontal.svg" alt="arrow horizontal" />
          </div>
        </div>

      </section>

      <div class="trending__discover" data-aos="zoom-in">
        <p>Discover</p>
      </div>

      <section class="trending-drinks">
        <div class="trending__image flex-center">
          <img src="../assets/drinks.png" alt="drinks" data-aos="fade-right" />
  
          <div class="trending__arrow trending__arrow-top">
            <img src="../assets/arrow-horizontal.svg" alt="arrow horizontal" />
          </div>
  
          <div class="trending__arrow trending__arrow-right">
            <img src="../assets/arrow-vertical.svg" alt="arrow vertical" />
          </div>
        </div>

        <div class="trending__content" data-aos="fade-left">
          <p class="sushi__subtitle">What’s Trending / トレンド</p>
  
          <h3 class="sushi__title">Beverages
          </h3>
          <p class="sushi__description">Feel the taste of sugar rush with our famous drinks here.
          </p>
  
          <ul class="trending__list flex-between">
            <li>
              <div class="trending__icon flex-center">
                <img src="../assets/check.svg" alt="check" />
              </div>
              <p>Straberries and Cream</p>
            </li>
            <li>
              <div class="trending__icon flex-center">
                <img src="../assets/check.svg" alt="check" />
              </div>
              <p>
                Cherry Vanilla Soda</p>
            </li>
            <li>
              <div class="trending__icon flex-center">
                <img src="../assets/check.svg" alt="check" />
              </div>
              <p>Espresso</p>
            </li>
            <li>
              <div class="trending__icon flex-center">
                <img src="../assets/check.svg" alt="check" />
              </div>
              <p>Iced Spanish Latte</p>
            </li>
            <li>
              <div class="trending__icon flex-center">
                <img src="../assets/check.svg" alt="check" />
              </div>
              <p>Hibiscus Iced Tea</p>
            </li>
            <li>
              <div class="trending__icon flex-center">
                <img src="../assets/check.svg" alt="check" />
              </div>
              <p>Vanilla Creme Cold Brew</p>
            </li>
          </ul>
        </div>
      </section>
    </section>

    <section class="subscription flex-center" id="services">
      <h2 data-aos="flip-down">
        Get offers straight <br />
        to your inbox
      </h2>
      <p data-aos="fade-up">
        Sign Up to Sugar Rush Newsletter Now!
      </p>

      <div class="subscription__form" data-aos="fade-up">
        <input type="text" placeholder="Enter your email address"/>
        <button>Subscribe</button>
      </div>
    </section>

    <?php require("footer.php"); ?>

    <script src="js/script.js" type="module"></script>
  </body>
</html>