<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">  
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Poppins&display=swap" rel="stylesheet">
    <title>THE OUTER CLOVE RESTAURENT| Our services</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg px-5 pt-4">
        <a class="navbar-brand" href="our-services.php">THE OUTER CLOVE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <div></div>
          <div></div>
          <div></div>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-link" href="index.php">HOME</a>
            <a class="nav-link" href="menu.php">MENU</a>
            <a class="nav-link" href="our-services.php">OUR SERVICES</a>
            <a class="nav-link" href="reservation.php">RESERVATIONS</a>
            <?php
            if (isset($_SESSION['name']))
              echo '<a class="nav-link" href="logout.php">LOGOUT</a>';
            else
              echo '<a class="nav-link active" href="login.php">LOGIN</a>';
            ?>
            <a class="nav-link" href="feedback.php">FEEDBACK</a>
            <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i></a>
          </div>
        </div>
      </nav>
      <style>
        body {
            font-family: 'Bree Serif', serif;
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 1px;
        }

        .box {
            background-color:transparent;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border:2px solid rgba(236, 193, 127, 0.973);;
        }

        h1 {
            color: #007bff;
            text-align: center;
            font-family: 'Bree Serif', serif;
        }

        h4 {
            color: #28a745; 
            font-family: 'Bree Serif', serif;
        }

        p {
            margin-bottom: 20px;
            text-align: justify;
            color: white;
            font-family: 'Bree Serif', serif;
        }

        @media (max-width: 767px) {
            .col-12 {
                padding: 0 15px;
            }
        }
    </style>
      <div class="container p-0">
      <div class="row">
        <div class="col-12 offset-lg-3 col-lg-6 offset-md-2 col-md-8 p-0">
        <form method="post" enctype="multipart/form-data" class="box">
        <h1>OUR SERVICES</h1>
                <h4>SEATING CAPACITY</h4>
                <p>Our restaurant offers a comfortable and spacious dining environment with a seating capacity of 50 people. Whether you're planning a cozy dinner for two or a celebration with friends and family, we have the perfect setting for every occasion.</p>

                <h4>PARKING AVAILABILITY</h4>
                <p>We understand the importance of convenience, and that's why we provide ample parking space for our guests. You can enjoy your dining experience without worrying about finding a parking spot. Our dedicated parking area ensures a hassle-free visit to Our Restaurant.</p>

                <h4>FREE DELIVERY FOOD</h4>
                <p>For those times when you prefer to savor our delicious dishes in the comfort of your own home, take advantage of our free delivery service. We offer prompt and reliable delivery to bring the exceptional flavors of our cuisine directly to your doorstep. Enjoy the same quality and taste without leaving your home.</p>

                <h4>TAKE-AWAY SERVICE</h4>
                <p>Experience the convenience of our take-away food service at our Restaurant. We understand that life can get busy, and sometimes you just want to enjoy our delicious meals in the comfort of your own home or on the go.</p>
      </form>
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
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
