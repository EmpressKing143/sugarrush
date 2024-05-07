<!DOCTYPE html>
<html lang="en">
<?php require("head.php"); ?>
<body>
    <?php require("header.php"); ?>
    <!-- Popular Food content -->
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

        <img src="../image/cart.png" style="font-size: 50px">

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
    <?php require("footer.php"); ?>
    <script src="js/script.js" type="module"></script>
</body>
</html>
