<?php
  include('database/connect.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Springs of olive DTB  Restaurant</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />
  
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link
      href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css"
      rel="stylesheet"
    />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
  </head>

  <body>
    <div class="container-xxl bg-white p-0">
      <!-- Spinner Start -->
      <!-- <div
        id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
      >
        <div
          class="spinner-border text-primary"
          style="width: 3rem; height: 3rem"
          role="status"
        >
          <span class="sr-only">Loading...</span>
        </div>
      </div> -->
      <!-- Spinner End -->

      <!-- Navbar & Hero Start -->
      <div class="container-xxl position-relative p-0">
        <nav
          class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0"
        >
          <a href="" class="navbar-brand p-0">
            <h1 class="text-primary m-0">
              <i class="fa fa-utensils me-3"></i>Inn n' Out
            </h1>
            <!-- <img src="img/logo.png" alt="Logo"> -->
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse"
          >
            <span class="fa fa-bars"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 pe-4">
              <a href="index.html" class="nav-item nav-link active">Home</a>
              <a href="about.html" class="nav-item nav-link">About</a>
              <a href="service.html" class="nav-item nav-link">Service</a>
              <a href="cart.php" class="nav-item nav-link">Cart</a>
              <div class="nav-item dropdown">
                <a
                  href="#"
                  class="nav-link dropdown-toggle"
                  data-bs-toggle="dropdown"
                  >Pages</a
                >
                <div class="dropdown-menu m-0">
                  <a href="booking.html" class="dropdown-item">Booking</a>
                  <a href="team.html" class="dropdown-item">Our Team</a>
                  <a href="testimonial.html" class="dropdown-item"
                    >Testimonial</a
                  >
                </div>
              </div>
              <a href="contact.html" class="nav-item nav-link">Contact</a>
            </div>
            <a href="cart.php" class="btn btn-primary py-2 px-4">Cart 

            <?php

              $sql = "SELECT * FROM cart";
              $result = mysqli_query($conn,$sql);
              $rows = mysqli_num_rows($result);

              echo'
               <span>('.$rows.')</span>
              ';
             ?>

            </a>
          </div>
        </nav>

        <div class="container-xxl py-5 bg-dark hero-header mb-5">
          <div class="container my-5 py-5">
            <div class="row align-items-center g-5">
              <div class="col-lg-6 text-center text-lg-start">
                <h1 class="display-3 text-white animated slideInLeft">
                  Enjoy Our<br />Delicious Meal
                </h1>
                <p class="text-white animated slideInLeft mb-4 pb-2">
                  Welcome to Inn n' Out, where we're passionate about serving up delicious kenyan food in a warm and inviting atmosphere. 
                  Our chefs use only the freshest ingredients to craft dishes that are both flavorful and visually stunning.
                </p>
                <a
                  href="Login.html"
                  class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft"
                  >BOOK A TABLE</a
                >
              </div>
              <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                <img class="img-fluid" src="img/hero.png" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Navbar & Hero End -->

      <!-- Service Start -->
      <div class="container-xxl py-5">
        <div class="container">
          <div class="row g-4">
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
              <div class="service-item rounded pt-3">
                <div class="p-4">
                  <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                  <h5>Master Chefs</h5>
                  <p>
                    Abayo is a talented chef with a love for cooking and a passion for 
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
              <div class="service-item rounded pt-3">
                <div class="p-4">
                  <i class="fa fa-3x fa-utensils text-primary mb-4"></i>
                  <h5>Quality Food</h5>
                  <p>
                    As a Master Chef, Abayo is committed to creating quality food that.
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
              <div class="service-item rounded pt-3">
                <div class="p-4">
                  <i class="fa fa-3x fa-cart-plus text-primary mb-4"></i>
                  <h5>Online Order</h5>
                  <p>
                    Imagine being able to enjoy your favorite restaurant dishes from the.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
              <div class="service-item rounded pt-3">
                <div class="p-4">
                  <i class="fa fa-3x fa-headset text-primary mb-4"></i>
                  <h5>24/7 Service</h5>
                  <p>
                    We understand that every guest is unique, and we strive to provide person
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Service End -->


      <!-- Menu Section Start -->
      <section id="food-menu">
        <div class="container">
          <header class="section-header">
            <h3>our delicious Food</h3>
          </header>
          <div class="row">


            <?php
                   
                   $get_product = "SELECT * FROM foods";
                   $result = mysqli_query($conn, $get_product);

                 while($row = mysqli_fetch_assoc($result)){

                      $SN  = $row['SN'];
                      $P_Name = $row['P_Name'];
                      $P_Image = $row['P_Image'];
                      $Price = $row['Price'];

                    echo'
                    
                     <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="single-menu">
                          <img class="img-fluid" src="'.$P_Image.'" />
                          <h4>'.$P_Name.'</h4>
                          <span>Ksh: '.$Price.'</span>
                          <a href="add_to_cart.php?id='.$SN.'">Order Now</a>
                        </div>
                    </div>
                    
                    ';

                 }

              ?>
  
          </div>
        </div>
      </section>
      <!-- Menu Section End-->


      <!-- Menu Start -->
      <div class="container-xxl py-5">
        <div class="container">
          <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5
              class="section-title ff-secondary text-center text-primary fw-normal"
            >
              Food Menu
            </h5>
            <h1 class="mb-5">Most Popular Items</h1>
          </div>
          <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
            <ul
              class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5"
            >
              <li class="nav-item">
                <a
                  class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active"
                  data-bs-toggle="pill"
                  href="#tab-1"
                >
                  
                  <i class="fa fa-hamburger fa-2x text-primary"></i>
                  <div class="ps-3">
                    <small class="text-body">Special</small>
                    <h6 class="mt-n1 mb-0">Brunch</h6>
                  </div>
                </a>
              </li>
              <li class="nav-item">
                <a
                  class="d-flex align-items-center text-start mx-3 pb-3"
                  data-bs-toggle="pill"
                  href="#tab-2"
                >
                  
                
                  <i class="fa fa-coffee fa-2x text-primary"></i>
                  <div class="ps-3">
                    <small class="text-body">Popular</small>
                    <h6 class="mt-n1 mb-0">Breakfast</h6>
                  </div>
                </a>
              </li>
              <li class="nav-item">
                <a
                  class="d-flex align-items-center text-start mx-3 me-0 pb-3"
                  data-bs-toggle="pill"
                  href="#tab-3"
                >
                  <i class="fa fa-utensils fa-2x text-primary"></i>
                  <div class="ps-3">
                    <small class="text-body">Gen-Z</small>
                    <h6 class="mt-n1 mb-0">combos</h6>
                  </div>
                </a>
              </li>
            </ul>
            <div class="tab-content">
              <div id="tab-1" class="tab-pane fade show p-0 active">
                <div class="row g-4">
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/menu-1.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Vegetable Rice</span>
                          <span class="text-primary">ksh 170</span>
                        </h5>
                        <small class="fst-italic"
                          >Our vegetable rice is a flavorful and nutritious side dish made with.</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/menu-2.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>ugali</span>
                          <span class="text-primary">ksh  160</span>
                        </h5>
                        <small class="fst-italic"
                          >Our ugali is a traditional East African staple made from cornmeal, carefully cooked to.</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/menu-3.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>French fries</span>
                          <span class="text-primary">ksh 200</span>
                        </h5>
                        <small class="fst-italic"
                          >Thick-cut and cooked twice for extra crunch</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/menu-4.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Chicken</span>
                          <span class="text-primary">ksh 300</span>
                        </h5>
                        <small class="fst-italic"
                          >Crispy fried chicken tenders made with fresh, never frozen chicken, hand-breaded with a secret blend of
                        </small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/menu-5.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Pilau</span>
                          <span class="text-primary">ksh 180</span>
                        </h5>
                        <small class="fst-italic"
                          >Pilau is a popular Swahili dish made with aromatic spices, tender meat or vegetables, and flavorful rice.</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/menu-6.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Mokimo</span>
                          <span class="text-primary">ksh 150</span>
                        </h5>
                        <small class="fst-italic"
                          >Mokimo is a traditional Kenyan dish made from mashed green bananas or plantains, often served 
                          with vegetables,</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/menu-7.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Fruit Juice</span>
                          <span class="text-primary">ksh 60</span>
                        </h5>
                        <small class="fst-italic">Fruit juice is a refreshing and nutritious beverage made from the extraction or pressing of juice from various fruits.</small>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/menu-8.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Beef</span>
                          <span class="text-primary">ksh 300</span>
                        </h5>
                        <small class="fst-italic">Wet fry beef, also known as "nyama choma" in Swahili, is a popular Kenyan dish made by slow-cooking beef in a flavorful stew.</small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="tab-2" class="tab-pane fade show p-0">
                <div class="row g-4">
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/menu-1.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Omelete</span>
                          <span class="text-primary">ksh 150</span>
                        </h5>
                        <small class="fst-italic">An omelette is a versatile and delicious dish made from beaten eggs cooked in a pan with various fillings such as vegetables, cheese.</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/menu-2.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Sausage</span>
                          <span class="text-primary">ksh 80</span>
                        </h5>
                        <small class="fst-italic"
                          >Sausages are a type of savory food made from ground meat, usually pork, beef, or chicken, mixed with spices 
                          and seasonings.</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/menu-3.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Sandwitch</span>
                          <span class="text-primary">ksh 100</span>
                        </h5>
                        <small class="fst-italic"
                          >A sandwich is a food item typically consisting of two or more slices of bread, often with fillings such as meats, cheeses, vegetables.</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/menu-4.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Bacon</span>
                          <span class="text-primary">ksh 180</span>
                        </h5>
                        <small class="fst-italic"
                          >Bacon is a type of cured and smoked pork meat, typically cut into thin strips, that is often cooked and served as a side dish, used as an ingredient in various recipes, or</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/menu-5.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Pancake </span>
                          <span class="text-primary">ksh 120</span>
                        </h5>
                        <small class="fst-italic"
                          >A pancake is a sweet or savory flat cake made from a batter of flour, eggs, and milk, often 
                          cooked on a griddle or</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/menu-6.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                          <span>Waffles</span>
                          <span class="text-primary">ksh 150</span>
                        </h5>
                        <small class="fst-italic">Waffles are a type of baked food made from a batter of flour, eggs, and milk, similar to pancakes, but cooked in a waffle iron to create 
                          a crispy exterior and a fluffy interior.</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/menu-7.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Muffins</span>
                          <span class="text-primary">ksh 70</span>
                        </h5>
                        <small class="fst-italic">
                           Muffins are small, baked treats that can be sweet or savory, made with a batter of flour, eggs, sugar,
                           and baking powder.
                          </small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/menu-8.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Chicken Pie</span>
                          <span class="text-primary">ksh 300</span>
                        </h5>
                        <small class="fst-italic"
                          >Chicken pie is a savory dish made with a filling of chicken, vegetables, and gravy, typically enclosed in a pastry crust and baked until golden brown. 
                          It's a comforting and</small
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="tab-3" class="tab-pane fade show p-0">
                <div class="row g-4">
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/menu-1.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>ugali ft beef</span>
                          <span class="text-primary">ksh 180</span>
                        </h5>
                        <small class="fst-italic"
                          ></small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/menu-2.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Chapati ft beef</span>
                          <span class="text-primary">ksh 370</span>
                        </h5>
                        <small class="fst-italic"
                          ></small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/menu-3.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Rice ft mutton</span>
                          <span class="text-primary">ksh 280</span>
                        </h5>
                        <small class="fst-italic"
                          ></small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/menu-4.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Mukimo ft Beef</span>
                          <span class="text-primary">ksh 200</span>
                        </h5>
                        <small class="fst-italic"
                          ></small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/menu-5.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Pilau ft kachumbari</span>
                          <span class="text-primary">ksh 250</span>
                        </h5>
                        <small class="fst-italic"
                          ></small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/menu-6.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>chapati ft beans</span>
                          <span class="text-primary">250</span>
                        </h5>
                        <small class="fst-italic"
                          ></small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/menu-7.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Smocha ft fruit juice</span>
                          <span class="text-primary">ksh 180</span>
                        </h5>
                        <small class="fst-italic"
                          ></small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/menu-8.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>biryani ft beef stew</span>
                          <span class="text-primary">ksh 400</span>
                        </h5>
                        <small class="fst-italic"
                          ></small
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Menu End -->
      
      <!-- Reservation Start -->
<div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
  <div class="row g-0">
    <div class="col-md-6">
      <div class="video">
        <button
          type="button"
          class="btn-play"
          data-bs-toggle="modal"
          data-src="https://www.youtube.com/embed/DWRcNpR6Kdc"
          data-bs-target="#videoModal"
        >
          <span></span>
        </button>
      </div>
    </div>
    <div class="col-md-6 bg-dark d-flex align-items-center">
      <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
        <h5 class="section-title ff-secondary text-start text-primary fw-normal">
          Reservation
        </h5>
        <h1 class="text-white mb-4">Book A Table Online</h1>
        <form id="reservationForm">
          <div class="row g-3">
            <div class="col-md-6">
              <div class="form-floating">
                <input
                  type="text"
                  class="form-control"
                  id="name"
                  placeholder="Your Name"
                  required
                />
                <label for="name">Your Name</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating">
                <input
                  type="email"
                  class="form-control"
                  id="email"
                  placeholder="Your Email"
                  required
                />
                <label for="email">Your Email</label>
              </div>
            </div>
            <div class="col-md-6">
              <div
                class="form-floating date"
                id="date3"
                data-target-input="nearest"
              >
                <input
                  type="text"
                  class="form-control datetimepicker-input"
                  id="datetime"
                  placeholder="Date & Time"
                  data-target="#date3"
                  data-toggle="datetimepicker"
                  required
                />
                <label for="datetime">Date & Time</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating">
                <select class="form-select" id="select1">
                  <option value="1">People 1</option>
                  <option value="2">People 2</option>
                  <option value="3">People 3</option>
                </select>
                <label for="select1">No Of People</label>
              </div>
            </div>
            <div class="col-12">
              <div class="form-floating">
                <textarea
                  class="form-control"
                  placeholder="Special Request"
                  id="message"
                  style="height: 100px"
                ></textarea>
                <label for="message">Special Request</label>
              </div>
            </div>
            <div class="col-12">
              <button class="btn btn-primary w-100 py-3" type="submit">
                Book Now
              </button>
            </div>
          </div>
        </form>

        <!-- Success message -->
        <div id="successMessage" class="text-white mt-3" style="display: none;">
          Booking Successful!
        </div>

        <!-- Error message -->
        <div id="errorMessage" class="text-danger mt-3" style="display: none;">
          Error! Could not complete your booking.
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Script to handle form submission -->
<script>
document.getElementById('reservationForm').addEventListener('submit', function(event) {
  event.preventDefault(); // Prevent form from submitting the default way

  // Get form values
  const name = document.getElementById('name').value;
  const email = document.getElementById('email').value;
  const date = document.getElementById('datetime').value;
  const people = document.getElementById('select1').value;
  const message = document.getElementById('message').value;

  // Send form data to backend using fetch API
  fetch('https://food-booking-system.onrender.com/api/book', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
    },
    body: JSON.stringify({
      customer_name: name,
      food_item: 'Table Reservation',  // Since this is a table reservation
      quantity: people,
      special_request: message,
      date_time: date,
    }),
  })
    .then((response) => response.json())
    .then((data) => {
      if (data.message === 'Booking successful') {
        document.getElementById('successMessage').style.display = 'block';
        document.getElementById('errorMessage').style.display = 'none';
      } else {
        document.getElementById('successMessage').style.display = 'none';
        document.getElementById('errorMessage').style.display = 'block';
      }
    })
    .catch((error) => {
      document.getElementById('successMessage').style.display = 'none';
      document.getElementById('errorMessage').style.display = 'block';
    });
});
</script>
      
      <!-- Reservation End -->

      <!-- Team Start -->
      <div class="container-xxl pt-5 pb-3">
        <div class="container">
          <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5
              class="section-title ff-secondary text-center text-primary fw-normal"
            >
              Team Members
            </h5>
            <h1 class="mb-5">Our Master Chefs</h1>
          </div>
          <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
              <div class="team-item text-center rounded overflow-hidden">
                <div class="rounded-circle overflow-hidden m-4">
                  <img class="img-fluid" src="img/team-1.jpg" alt="" />
                </div>
                <h5 class="mb-0">Abayo Elizabeth</h5>
                <small>Designation - Head chef</small>
                <div class="d-flex justify-content-center mt-3">
                  <a class="btn btn-square btn-primary mx-1" href=""
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a class="btn btn-square btn-primary mx-1" href=""
                    ><i class="fab fa-twitter"></i
                  ></a>
                  <a class="btn btn-square btn-primary mx-1" href=""
                    ><i class="fab fa-instagram"></i
                  ></a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
              <div class="team-item text-center rounded overflow-hidden">
                <div class="rounded-circle overflow-hidden m-4">
                  <img class="img-fluid" src="img/team-2.jpg" alt="" />
                </div>
                <h5 class="mb-0">Caleb Odinga</h5>
                <small>Designation - Master chef</small>
                <div class="d-flex justify-content-center mt-3">
                  <a class="btn btn-square btn-primary mx-1" href=""
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a class="btn btn-square btn-primary mx-1" href=""
                    ><i class="fab fa-twitter"></i
                  ></a>
                  <a class="btn btn-square btn-primary mx-1" href=""
                    ><i class="fab fa-instagram"></i
                  ></a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
              <div class="team-item text-center rounded overflow-hidden">
                <div class="rounded-circle overflow-hidden m-4">
                  <img class="img-fluid" src="img/team-3.jpg" alt="" />
                </div>
                <h5 class="mb-0">Ida Ngina</h5>
                <small>Designation - Pastry Chef</small>
                <div class="d-flex justify-content-center mt-3">
                  <a class="btn btn-square btn-primary mx-1" href=""
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a class="btn btn-square btn-primary mx-1" href=""
                    ><i class="fab fa-twitter"></i
                  ></a>
                  <a class="btn btn-square btn-primary mx-1" href=""
                    ><i class="fab fa-instagram"></i
                  ></a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
              <div class="team-item text-center rounded overflow-hidden">
                <div class="rounded-circle overflow-hidden m-4">
                  <img class="img-fluid" src="img/team-4.jpg" alt="" />
                </div>
                <h5 class="mb-0">Wesley Waweru</h5>
                <small>Designation - Line cook</small>
                <div class="d-flex justify-content-center mt-3">
                  <a class="btn btn-square btn-primary mx-1" href=""
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a class="btn btn-square btn-primary mx-1" href=""
                    ><i class="fab fa-twitter"></i
                  ></a>
                  <a class="btn btn-square btn-primary mx-1" href=""
                    ><i class="fab fa-instagram"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Team End -->

      <!-- Testimonial Start -->
      <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
          <div class="text-center">
            <h5
              class="section-title ff-secondary text-center text-primary fw-normal"
            >
              Testimonial
            </h5>
            <h1 class="mb-5">Our Clients Say!!!</h1>
          </div>
          <div class="owl-carousel testimonial-carousel">
            <div class="testimonial-item bg-transparent border rounded p-4">
              <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
              <p>
                I've been to many fine dining restaurants in my life, but none have compared to the exceptional service and cuisine at Inn n' Out. 
                The attention to detail and personalized care from the staff made our anniversary dinner truly unforgettable. We can't wait to come back!
              </p>
              <div class="d-flex align-items-center">
                <img
                  class="img-fluid flex-shrink-0 rounded-circle"
                  src="img/testimonial-1.jpg"
                  style="width: 50px; height: 50px"
                />
                <div class="ps-3">
                  <h5 class="mb-1">Caroline Mugo</h5>
                  <small>Human Resource manager</small>
                </div>
              </div>
            </div>
            <div class="testimonial-item bg-transparent border rounded p-4">
              <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
              <p>
                I'm a foodie at heart, and I was blown away by the creativity and flavors of the dishes at Inn n' Out. The chef's table experience was
                 a highlight of my year, and I've already recommended it to all my friends. 
            
                
                The atmosphere is cozy and intimate, perfect for a night out with friends or a romantic evening
              </p>
              <div class="d-flex align-items-center">
                <img
                  class="img-fluid flex-shrink-0 rounded-circle"
                  src="img/testimonial-2.jpg"
                  style="width: 50px; height: 50px"
                />
                <div class="ps-3">
                  <h5 class="mb-1">James Mwangi</h5>
                  <small>CIDO</small>
                </div>
              </div>
            </div>
            <div class="testimonial-item bg-transparent border rounded p-4">
              <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
              <p>
                As a vegetarian, I often find myself limited by menu options. But Inn n' Out went above and beyond to accommodate my dietary needs. 
                The seasonal vegetable tart was to die for, and the staff were knowledgeable and friendly. I've found my new favorite spot!
              </p>
              <div class="d-flex align-items-center">
                <img
                  class="img-fluid flex-shrink-0 rounded-circle"
                  src="img/testimonial-3.jpg"
                  style="width: 50px; height: 50px"
                />
                <div class="ps-3">
                  <h5 class="mb-1">Nancy Muriuki</h5>
                  <small> IT dept</small>
                </div>
              </div>
            </div>
            <div class="testimonial-item bg-transparent border rounded p-4">
              <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
              <p>
                I was skeptical about trying a new restaurant for our company's holiday party, but Inn n' Out exceeded all expectations. 
                The private dining room was beautifully decorated, 
                and the service was top-notch. Our team had an amazing time, and the food was incredible. We'll be back next year
              </p>
              <div class="d-flex align-items-center">
                <img
                  class="img-fluid flex-shrink-0 rounded-circle"
                  src="img/testimonial-4.jpg"
                  style="width: 50px; height: 50px"
                />
                <div class="ps-3">
                  <h5 class="mb-1">Lilian Ngala</h5>
                  <small>Human Resource manager</small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Testimonial End -->

      <!-- Footer Start -->
      <div
        class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn"
        data-wow-delay="0.1s"
      >
        <div class="container py-5">
          <div class="row g-5">
            <div class="col-lg-3 col-md-6">
              <h4
                class="section-title ff-secondary text-start text-primary fw-normal mb-4"
              >
                Company
              </h4>
              <a class="btn btn-link" href="">About Us</a>
              <a class="btn btn-link" href="">Contact Us</a>
              <a class="btn btn-link" href="">Reservation</a>
              <a class="btn btn-link" href="">Privacy Policy</a>
              <a class="btn btn-link" href="">Terms & Condition</a>
            </div>
            <div class="col-lg-3 col-md-6">
              <h4
                class="section-title ff-secondary text-start text-primary fw-normal mb-4"
              >
                Contact
              </h4>
              <p class="mb-2">
                <i class="fa fa-map-marker-alt me-3"></i> along Mombasa rd, opposite Airtel HQ
          
              </p>
              <p class="mb-2">
                <i class="fa fa-phone-alt me-3"></i> +254 721706997
              </p>
              <p class="mb-2">
                <i class="fa fa-envelope me-3"></i>info@Innn'out@gmail.com
      
              </p>
              <div class="d-flex pt-2">
                <a class="btn btn-outline-light btn-social" href=""
                  ><i class="fab fa-twitter"></i
                ></a>
                <a class="btn btn-outline-light btn-social" href=""
                  ><i class="fab fa-facebook-f"></i
                ></a>
                <a class="btn btn-outline-light btn-social" href=""
                  ><i class="fab fa-youtube"></i
                ></a>
                <a class="btn btn-outline-light btn-social" href=""
                  ><i class="fab fa-linkedin-in"></i
                ></a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <h4
                class="section-title ff-secondary text-start text-primary fw-normal mb-4"
              >
                Opening
              </h4>
              <h5 class="text-light fw-normal">Monday - Saturday</h5>
              <p>09AM - 09PM</p>
              <h5 class="text-light fw-normal">Sunday</h5>
              <p>10AM - 08PM</p>
            </div>
            <div class="col-lg-3 col-md-6">
              <h4
                class="section-title ff-secondary text-start text-primary fw-normal mb-4"
              >
                Newsletter
              </h4>
              <p>For queries</p>
              <div class="position-relative mx-auto" style="max-width: 400px">
                <input
                  class="form-control border-primary w-100 py-3 ps-4 pe-5"
                  type="text"
                  placeholder="Your email"
                />
                <a href="Signup.html">
                  <button
                    type="button"
                    class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2"
                  >
                    SignUp
                  </button>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="copyright">
            <div class="row">
              <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                &copy; <a class="border-bottom" href="#">Inn n' Out</a>, All
                Right Reserved.

                <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                Designed By
                <a class="border-bottom" href=""
                  >IT job shadowing team</a
                >
              </div>
              <div class="col-md-6 text-center text-md-end">
                <div class="footer-menu">
                  <a href="">Home</a>
                  <a href="">Cookies</a>
                  <a href="">Help</a>
                  <a href="">FQAs</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer End -->

      <!-- Back to Top -->
      <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"
        ><i class="bi bi-arrow-up"></i
      ></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
  </body>
</html>
