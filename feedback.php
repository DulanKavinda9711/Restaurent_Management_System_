<?php 

    session_start();
    include("admin_area/includes/db.php");

?>
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
    <title>THE OUTER CLOVE RESTAURENT| FEEDBACK</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg px-5 pt-4">
        <a class="navbar-brand" href="index.html">THE OUTER CLOVE</a>
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
              echo '<a class="nav-link" href="login.php">LOGIN</a>';
            ?>
            <a class="nav-link active" href="feedback.php">FEEDBACK</a>
            <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i></a>
          </div>
        </div>
      </nav>
    <div class="container">
      <div class="row">
        <div class="col-12 offset-lg-3 col-lg-6 offset-md-2 col-md-8 p-0">
      <form method="post" enctype="multipart/form-data" class="box boxtwo">
    <h1>FEEDBACK</h1>
    <input type="text" name="name" placeholder="Name" required="">
    <input type="text" name="Email" placeholder="Email ID" required="">
    <input type="text" name="mobileno" placeholder="Mobile No." required="">
    <input type="text" name="Message" placeholder="Message" required="">
      <input type="submit" name="Send" value="Send">
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
    <script src="js/menujs.js"></script>
  </body>
</html>
<?php 

if(isset($_POST['Send'])){
    
    $name = $_POST['name'];
    $mobileno = $_POST['mobileno'];
    $email = $_POST['Email'];
    $message = $_POST['Message'];
    
       
    $insert_contact = "insert into contacts(contact_name,contact_mobile,contact_email,contact_message) values ('$name','$mobileno','$email','$message')";
    
    $run_contact = mysqli_query($con,$insert_contact);
    
    if($run_contact){
        
        echo "<script>alert('Your Message has been Delievered')</script>";
        echo "<script>window.open('menu.php','_self')</script>";
        
    }
    
}

?>

