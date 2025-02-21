<?php
Use Dotenv\Dotenv;// Import Dotenv classes into the global namespace
  // Load Composer's autoloader
include './vendor/autoload.php';
require_once './Database/connect.php';



// Load environment variables
$dotenv = Dotenv::createImmutable('./');
$dotenv->load();

// Signin With Google Account Start
$client = new Google\Client;

$client ->setClientId($_ENV['GOOGLE_CLIENT_ID']);
$client->setClientSecret($_ENV['GOOGLE_CLIENT_SECRET']);
$client->setRedirectUri($_ENV['GOOGLE_REDIRECT_URI']);

$client->addScope("email");
$client->addScope("profile");

$url = $client->createAuthUrl();
// Google Auth End



?>


<!DOCTYPE php>
<php lang="en">
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
      rel="stylesheet"/>
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
    <div class="container-fluid bg-white p-0">
    

      <!-- Navbar & Hero Start -->
      <div class="container-fluid position-relative p-0">
        <nav
          class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0"
        >
          <a href="" class="navbar-brand p-0">
            <h1 class="text-primary m-0">
              <i class="fa fa-utensils me-3"></i>Springs f' Olives
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
              <a href="index.php" class="nav-item nav-link active">Home</a>
              <a href="about.php" class="nav-item nav-link">About</a>
              <a href="service.php" class="nav-item nav-link">Service</a>
              <a href="cart.php" class="nav-item nav-link">Cart</a>
              <div class="nav-item dropdown">
                <!-- <a
                  href="#"
                  class="nav-link dropdown-toggle"
                  data-bs-toggle="dropdown"
                  >Pages</a
                > -->
                <div class="dropdown-menu m-0">
                  <a href="booking.php" class="dropdown-item">Booking</a>
                  <a href="team.php" class="dropdown-item">Our Team</a>
                  <a href="testimonial.php" class="dropdown-item"
                    >Testimonial</a
                  >
                </div>
              </div>
              <a href="contact.php" class="nav-item nav-link">Contact</a>
            </div>
            <a href="<?= $url ?>" class="btn btn-primary py-2 px-4">Cart 

            <?php

              session_start();
              if (!isset($_SESSION['google_auth'])) {
                echo'
                <span>0</span>
               ';
              }else{

              include './Database/connect.php';

              // Check which session variable is set and get the user ID
              $id = isset($_SESSION['google_auth']) ? $_SESSION['google_auth'] : null;

              // Use prepared statements to prevent SQL injection
              $stmt = $conn->prepare("SELECT * FROM users WHERE SN = ?");
              $stmt->bind_param("i", $id);
              $stmt->execute();
              $result = $stmt->get_result();
              $details = $result->fetch_object();

              $profileImage = htmlspecialchars($details->Avatar, ENT_QUOTES, 'UTF-8'); // Sanitize output
              $name = htmlspecialchars($details->First_Name, ENT_QUOTES, 'UTF-8'); // Sanitize output
              $email = htmlspecialchars($details->Email, ENT_QUOTES, 'UTF-8'); // Sanitize output

              $sql = "SELECT * FROM cart WHERE Email = '$email'";
              $result = mysqli_query($conn,$sql);
              $rows = mysqli_num_rows($result);

              echo'
               <span>('.$rows.')</span>
              ';

              }
             ?>

            </a>
          </div>
        </nav>

        <div class="container-fluid py-5 bg-dark hero-header mb-5">
          <div class="container my-5 py-5">
            <div class="row align-items-center g-5">
              <div class="col-lg-6 text-center text-lg-start">
                <h1 class="display-3 text-white animated slideInLeft">
                  Enjoy Our<br />Delicious Meal
                </h1>
                <p class="text-white animated slideInLeft mb-4 pb-2">
                  Welcome to Springs f' Olives, where we're passionate about serving up delicious kenyan food in a warm and inviting atmosphere. 
                  Our chefs use only the freshest ingredients to craft dishes that are both flavorful and visually stunning.
                </p>
                <a
                  href="#booking"
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
      <div class="container-fluid py-5">
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

    echo '
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="single-menu" style="
                background: #fff;
                border-radius: 10px;
                padding: 15px;
                text-align: center;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                transition: transform 0.3s ease-in-out;">
                
                <!-- Product Image with Fixed Size -->
                <img src="'.$P_Image.'" style="
                    width: 100%;
                    height: 200px; 
                    object-fit: cover; 
                    border-radius: 8px;" />

                <!-- Product Name Styling -->
                <h4 style="
                    font-size: 18px;
                    font-weight: bold;
                    color: #333;
                    margin: 10px 0;">
                    '.$P_Name.'
                </h4>

                <!-- Product Price Styling -->
                <span style="
                    font-size: 16px;
                    font-weight: bold;
                    color: #007bff;
                    display: block;
                    margin-bottom: 10px;">
                    Ksh: '.$Price.'
                </span>

                <!-- Order Now Button -->
                <a href="add_to_cart.php?id='.$SN.'"  style="
                    display: inline-block;  
                    padding: 10px 15px;
                    background: #dc3545;
                    color: #fff;
                    text-decoration: none;
                    font-weight: bold;
                    border-radius: 5px;
                    transition: background 0.3s ease-in-out;">
                    Order Now
                </a>
            </div>
        </div>
    ';
}
?>

  
          </div>
        </div>
      </section>
     
<div class="container-fluid py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
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
        <h1 class="text-white mb-4" id="booking">Book A Table Online</h1>
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
                <i class="fa fa-envelope me-3"></i>info@Springsf'Olives@gmail.com
      
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
                <a href="Signup.php">
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
                &copy; <a class="border-bottom" href="#">Springs f' Olives</a>, All
                Right Reserved.

                <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://phpcodex.com/credit-removal". Thank you for your support. ***/-->
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




  <?php



?>