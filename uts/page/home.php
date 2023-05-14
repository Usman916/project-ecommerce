<?php
    session_start();
        if($_SESSION['status_login'] != true){
            echo '<script>window.location="login.php"</script>';
    }
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>LUGX PETSHOP</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-lugx-gaming.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 589 lugx gaming

https://templatemo.com/tm-589-lugx-gaming

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="home.php" class="logo">
                        <img src="assets/images/logo.png" alt="" style="width: 158px;">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li><a href="home.php">Home</a></li>
                      <li><a href="shop.php">Our Shop</a></li>
                      <li><a href="product-details.php">Product Details</a></li>
                      <li><a href="contact.php">Contact Us</a></li>
                      <li><a href="../login2.php">Sign In</a></li>
                  </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="caption header-text">
            <h6>Welcome to LUGX PETS</h6>
            <h2>Where being a is just the best</h2>
            <p>From the time our friends sniff their way through the door in the morning until they wag their weary, but satisfied tails out in the afternoon, we cater to their nature.</p>
            <div class="search-input">
              <form id="search" action="#">
                <input type="text" placeholder="Type Something" id='searchText' name="searchKeyword" onkeypress="handle" />
                <button role="button">Search Now</button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-4 offset-lg-2">
          <div class="right-image">
            <img src="assets/images/pet2.png" alt="">
            <span class="price">$22</span>
            <span class="offer">-40%</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="features">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <a href="#">
            <div class="item">
              <div class="image">
                <img src="assets/images/dog2.png" alt="" style="max-width: 100px;">
              </div>
              <h4>Dog Boarding</h4>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="#">
            <div class="item">
              <div class="image">
                <img src="assets/images/cat.png" alt="" style="max-width: 100px;">
              </div>
              <h4>Cat Boarding</h4>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="#">
            <div class="item">
              <div class="image">
                <img src="assets/images/hams.jpg" alt="" style="max-width: 100px;">
              </div>
              <h4>Hamster Boarding</h4>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="#">
            <div class="item">
              <div class="image">
                <img src="assets/images/rbt.png" alt="" style="max-width: 100px;">
              </div>
              <h4>Rabit Boarding</h4>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="section trending">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <h6>Product</h6>
            <h2>Product categories</h2>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="main-button">
            <a href="shop.php">View All</a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="item">
            <div class="thumb">
              <a href="product-details.php"><img src="assets/images/p1.jpg" alt=""></a>
              <span class="price"><em>$28</em>$20</span>
            </div>
            <div class="down-content">
              <span class="category">FOOD</span>
              <h4>Air Dried Lamb </h4>
              <a href="product-details.php"><i class="fa fa-shopping-bag"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="item">
            <div class="thumb">
              <a href="product-details.php"><img src="assets/images/p2.jpg" alt=""></a>
              <span class="price">$44</span>
            </div>
            <div class="down-content">
              <span class="category">FISH</span>
              <h4>Air Dried Salmon</h4>
              <a href="product-details.php"><i class="fa fa-shopping-bag"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="item">
            <div class="thumb">
              <a href="product-details.php"><img src="assets/images/p3.jpg" alt=""></a>
              <span class="price"><em>$64</em>$44</span>
            </div>
            <div class="down-content">
              <span class="category">BEEF</span>
              <h4>Air Dried BEEF</h4>
              <a href="product-details.php"><i class="fa fa-shopping-bag"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="item">
            <div class="thumb">
              <a href="product-details.php"><img src="assets/images/P4.jpg" alt=""></a>
              <span class="price">$32</span>
            </div>
            <div class="down-content">
              <span class="category">REWARDS</span>
              <h4>Fish Dog Rewards</h4>
              <a href="product-details.php"><i class="fa fa-shopping-bag"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section most-played">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <h6>TOP FOOD</h6>
            <h2>Most in demand</h2>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="main-button">
            <a href="shop.php">View All</a>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6">
          <div class="item">
            <div class="thumb">
              <a href="product-details.php"><img src="assets/images/p5.jpg" alt=""></a>
            </div>
            <div class="down-content">
                <span class="category">FOOD</span>
                <h4>Beef Dog Rewards</h4>
                <a href="product-details.php">Explore</a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6">
          <div class="item">
            <div class="thumb">
              <a href="product-details.php"><img src="assets/images/p6.jpg" alt=""></a>
            </div>
            <div class="down-content">
                <span class="category">FOOD</span>
                <h4>Dry Beef Food</h4>
                <a href="product-details.php">Explore</a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6">
          <div class="item">
            <div class="thumb">
              <a href="product-details.php"><img src="assets/images/p7.jpg" alt=""></a>
            </div>
            <div class="down-content">
                <span class="category">FOOD</span>
                <h4>Dry Chicken Food</h4>
                <a href="product-details.php">Explore</a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6">
          <div class="item">
            <div class="thumb">
              <a href="product-details.php"><img src="assets/images/p8.jpg" alt=""></a>
            </div>
            <div class="down-content">
                <span class="category">FOOD</span>
                <h4>Dry Lamb Food</h4>
                <a href="product-details.php">Explore</a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6">
          <div class="item">
            <div class="thumb">
              <a href="product-details.php"><img src="assets/images/p9.jpg" alt=""></a>
            </div>
            <div class="down-content">
                <span class="category">FOOD</span>
                <h4>Dry Salmon Food</h4>
                <a href="product-details.php">Explore</a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6">
          <div class="item">
            <div class="thumb">
              <a href="product-details.php"><img src="assets/images/p10.jpg" alt=""></a>
            </div>
            <div class="down-content">
                <span class="category">FOOD</span> 
                <h4>Lamb Dog Rewards</h4>
                <a href="product-details.php">Explore</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section categories">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section-heading">
            <h6>Categories</h6>
            <h2>Top Categories</h2>
          </div>
        </div>
        <div class="col-lg col-sm-6 col-xs-12">
          <div class="item">
            <h4>limited</h4>
            <div class="thumb">
              <a href="product-details.php"><img src="assets/images/p11.jpg" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-lg col-sm-6 col-xs-12">
          <div class="item">
            <h4>limited</h4>
            <div class="thumb">
              <a href="product-details.php"><img src="assets/images/p12.jpg" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-lg col-sm-6 col-xs-12">
          <div class="item">
            <h4>limited</h4>
            <div class="thumb">
              <a href="product-details.php"><img src="assets/images/p13.jpg" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-lg col-sm-6 col-xs-12">
          <div class="item">
            <h4>limited</h4>
            <div class="thumb">
              <a href="product-details.php"><img src="assets/images/p14.jpg" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-lg col-sm-6 col-xs-12">
          <div class="item">
            <h4>limited</h4>
            <div class="thumb">
              <a href="product-details.php"><img src="assets/images/p15.jpg" alt=""></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="section cta">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="shop">
            <div class="row">
              <div class="col-lg-12">
                <div class="section-heading">
                  <h6>Our Shop</h6>
                  <h2>Go Pre-Order Buy & Get Best <em>Prices</em> For You!</h2>
                </div>
                <p>Lorem ipsum dolor consectetur adipiscing, sed do eiusmod tempor incididunt.</p>
                <div class="main-button">
                  <a href="shop.php">Shop Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 offset-lg-2 align-self-end">
          <div class="subscribe">
            <div class="row">
              <div class="col-lg-12">
                <div class="section-heading">
                  <h6>NEWSLETTER</h6>
                  <h2>Get Up To $100 Off Just Buy <em>Subscribe</em> Newsletter!</h2>
                </div>
                <div class="search-input">
                  <form id="subscribe" action="#">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your email...">
                    <button type="submit">Subscribe Now</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © 2023 WPU Web Programing Usman. All rights reserved. &nbsp;&nbsp; <a rel="nofollow" href="https://templatemo.com" target="_blank">UTS : Semester 2</a></p>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>

  </body>
</html>