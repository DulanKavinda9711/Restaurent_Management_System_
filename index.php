<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Poppins&display=swap" rel="stylesheet">
    <title>THE OUTER CLOVE RESTAURENT</title>
  </head>
  <body> 
  <div class="container-fluid">
    <div id="home">
      <nav class="navbar navbar-expand-lg px-5 pt-4">
        <a class="navbar-brand" href="index.php">THE OUTER CLOVE</a>
        <img src="leaf.png" class="leafimg d-none d-lg-block">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <div></div>
          <div></div>
          <div></div>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-link active" href="index.php">HOME</a>
            <a class="nav-link" href="menu.php">MENU</a>
            <a class="nav-link" href="our-services.php">OUR SERVICES</a>
            <a class="nav-link" href="reservation.php">RESERVATIONS</a>
            <?php
            session_start();
            if (isset($_SESSION['name']))
              echo '<a class="nav-link" href="logout.php">LOGOUT</a>';
            else
              echo '<a class="nav-link" href="login.php">LOGIN</a>';
            ?>
            <a class="nav-link" href="feedback.php">FEEDBACK</a>
            <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i></a>
          </div>
        </div>
      </nav>
      <div class="hometext d-none d-md-block" style="font-family: 'Bree Serif', serif;">
    		<div data-aos="fade-up" data-aos-delay="1000" data-aos-duration="1500">
    		<h1>WELCOME - THE OUTER CLOVE</h1>
        <h3>The Perfect Food at Your Door</h3><br>
        <img src="images/brand.png" alt="Brand Logo"  style="width: 150px; height: auto;">
    		</div>
  	  </div>
    </div>
    <div class="row py-5" id="cards">
        <div class="col-12 col-md-4">
        <a href="menu.php">
          <div class="card m-4">
            <img class="card-img" src="images/breakfast.jpg" alt="">
            <div class="card-img-overlay">
              <h4>BREAKFAST</h4>
            </div>
          </div>
        </a> 
        <div class="col-14 col-md-16">
        <a href="our-services.php">
          <div class="card m-4">
            <img class="card-img" src="images/Free delivery.jpg" alt="">
            <div class="card-img-overlay">
              <h4>FREE DELIVERY</h4>
            </div>
          </div>
          </a> 
        </div>
        </div>
        <div class="col-12 col-md-4">
        <a href="menu.php">
          <div class="card m-4">
            <img class="card-img" src="images/lunch.jpg" alt="">
            <div class="card-img-overlay">
              <h4>LUNCH</h4>
            </div>
          </div>
        </a>
        <div class="col-14 col-md-16">
        <a href="our-services.php">
          <div class="card m-4">
            <img class="card-img" src="images//Seating.jpg" alt="">
            <div class="card-img-overlay">
              <h4>GUEST CAPACITY</h4>
            </div>
          </div>
          </a>
        </div>
        </div>
        <div class="col-12 col-md-4">
        <a href="menu.php">
          <div class="card m-4">
            <img class="card-img" src="images/dinner.jpg" alt="">
            <div class="card-img-overlay">
              <h4>DINNER</h4>
            </div>
          </div>
        </a>
        <div class="col-14 col-md-16">
        <a href="our-services.php">
          <div class="card m-4">
            <img class="card-img" src="images/parking.jpg" alt="">
            <div class="card-img-overlay">
              <h4>PARKING AVAILABLE</h4>
            </div>
          </div>
          </a>
        </div>  
    </div>
  </div>
    <footer>
    <div class="container">
      <div class="row">
      <section class="col-md-4">
          <h4>Address :</h4>
           <p>59 Saranankara Rd Kandy Lake,<br>
           Kandy 20000 Sri Lanka</p>
          <br>
        </section>
        <section class="col-md-4">
          <h4>Hours :</h4>
          <p>Monday - Friday : 08:30am - 08:30pm<br>
          Saturady - Sunday : 10:00am - 08:30pm</p>
          <br>
        </section>
        <section class="col-md-3 offset-md-1">
          <h4>Contact Us :</h4>
          <i class="fas fa-envelope"></i>
          <i class="fab fa-youtube"></i>
          <i class="fab fa-facebook"></i>
          <i class="fab fa-instagram"></i><br>
          <a href="mailto:outerclove@gmail.com">outerclove@gmail.com</a>
          <br>
        </section>
      </div>
      <div class="text-center">&copy; Copyright OUTER CLOVE 2023</div>
    </div>
  </footer>
  </div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
