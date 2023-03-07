<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic%7cRoboto:400,100italic,100,300,300italic,400italic,500,500italic,700,700italic,900,900italic%7cOpen+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
   

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css">

    <title>login</title>
  </head>
  <body>
    <section class="ftco-section">
      <div class="wrap">
        <div class="container">
          <div class="row justify-content-between">
              <div class="col">
                <p class="mb-0 phone"> <span class="tel"><i class="fa fa-phone"></i>Call Us: <a href="tel:+91-9884402027">+91-9884402027</a></span></p>
              </div>
              <div class="col d-flex justify-content-end">
                <div class="social-media">
                  <p class="mb-0 d-flex">
                    <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                    <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                    <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                    <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
                  </p>
                </div>
              </div>
          </div>
        </div>
      </div>
      <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
          <div class="logo"><a href="javascript:;"><img src="image/vlogo.jpg" alt="yameecluster"></a></div>
          <form action="#" class="searchform order-sm-start order-lg-last">
            <div class="form-group d-flex">
              <input type="text" class="form-control pl-3" placeholder="Search">
              <button type="submit" placeholder="" class="form-control search"><span class="fa fa-search"></span></button>
            </div>
          </form>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span> Menu
          </button>
          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav m-auto">
              <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
            
              <li class="nav-item"><a href="register.php" class="nav-link">Register</a></li>
              <li class="nav-item"><a href="user.php" class="nav-link">User Detail</a></li>
              
            </ul>
          </div>
        </div>
      </nav>
      <!-- END nav -->
  
    </section>
    <section class=" text-center text-lg-start">
  <style>
    .rounded-t-5 {
      border-top-left-radius: 0.5rem;
      border-top-right-radius: 0.5rem;
    }

    @media (min-width: 992px) {
      .rounded-tr-lg-0 {
        border-top-right-radius: 0;
      }

      .rounded-bl-lg-5 {
        border-bottom-left-radius: 0.5rem;
      }
      
    }
  </style>
  <div class="card mb-3">
    <div class="row g-0 d-flex align-items-center">
      <div class="col-lg-4 d-none d-lg-flex">
        <img src="https://mdbootstrap.com/img/new/ecommerce/vertical/004.jpg" alt="Trendy Pants and Shoes"
          class="w-100 rounded-t-5 rounded-tr-lg-0 rounded-bl-lg-5" />
      </div>
      <div class="col-lg-8">
        <div class="card-body py-5 px-md-5">
   
       
<form> <h1><center>Password</center></h1><br><br><br>
<?php

include ("config.php");

$uname = $_POST['name'];
$sqli = "SELECT * FROM `register` WHERE name='$uname' ";
$result = mysqli_query($conn, $sqli);
$row = mysqli_fetch_array($result);
echo nl2br("\n USER NAME $row[0]");

echo nl2br("\n MAIL-ID $row[5]");
echo nl2br("\n THIS IS YOUR PASSWORD $row[6]");


//if(!$result_query)  {    
?>



        </form>

        <div style="display:flex;padding-top: 50px; padding-left:300px;">
<a href="index.php"><button class="btn btn--radius-2 btn--red butt"  name="login" type="submit">LOGIN</button></a></div>
      

        </div>
      </div>
      
    </div>
  </div>
</section>



<footer class="footer-48201">
      
      <div class="container">
        <div class="row">
          <div class="col-md-4 pr-md-5">
            <a href="#" class="footer-site-logo d-block mb-4">YAMEE CLUSTER</a>
            <p>we are a website development, software development and IT consultant organization have focus on providing Information Technology services required by its partners globally. </p>
          </div>
          <div class="col-md">
            <ul class="list-unstyled nav-links">
              <ul><li><a href="index.html">Home</a></li><br>
                <li><a href="register.html">Register</a></li><br>
                <li><a href="user.html"></a>User Detail </li><br>
                <!--<li><a href="cservices.html">CORPOATE SERVICES</a></li><br>-->
                
          </div>
        
          <div class="col-md text-md-center">
            <ul class="social list-unstyled">
              <li><a href="#"><span class="icon-instagram"></span></a></li>
              <li><a href="#"><span class="icon-twitter"></span></a></li>
              <li><a href="#"><span class="icon-facebook"></span></a></li>
              <li><a href="#"><span class="icon-pinterest"></span></a></li>
              <li><a href="#"><span class="icon-dribbble"></span></a></li>
            </ul>
            <p class=""><a href="#" class="btn btn-tertiary">Contact Us</a></p>
          </div>
        </div> 

        <div class="row ">
          <div class="col-12 text-center">
            <div class="copyright mt-5 pt-5">
              <p><small>&copy; 2019-2020 All Rights Reserved.</small></p>
            </div>
          </div>
        </div> 
      </div>
      
    </footer>

    
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>