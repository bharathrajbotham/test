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
              <li class="nav-item "><a href="index.php" class="nav-link">Home</a></li>
            <!--  <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Page</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="#">Page 1</a>
                  <a class="dropdown-item" href="#">Page 2</a>
                  <a class="dropdown-item" href="#">Page 3</a>
                  <a class="dropdown-item" href="#">Page 4</a>
                </div>
              </li>-->
              <li class="nav-item"><a href="register.php" class="nav-link">Register</a></li>
              <li class="nav-item active"><a href="user.php" class="nav-link">User Detail</a></li>
              
            </ul>
          </div>
        </div>
      </nav>
      <!-- END nav -->
  
    </section>

    <!-- Section: Design Block -->
<section class=" text-center text-lg-start">
<?php
 include ("config.php");

$show="SELECT* FROM register";
$result1=mysqli_query($conn,$show);


echo "<table table width='100%'>";
echo "<tr>";
echo "<th>ID</th><th>NAME</th><th>D_O_B</th><th>GENDER</th><th>PHONE</th><th>E-MAIL</th><th>QUALIFICATION</th><th>LANGUAGE</th><th>ADDRESS</th><th>EDIT</th><th>DELETE</th>";
echo "</tr>";
$row_num=mysqli_num_rows($result1);
$a=$row_num/5;
$a=ceil($a);
if(!isset($_GET['page']))
{
    $page=1;
}
else
{
    $page=$_GET['page'];
}
$page1=($page-1)*10;

$show="SELECT* FROM register LIMIT $page1,10";
$result=mysqli_query($conn,$show);

    while ($row = mysqli_fetch_row($result)) {
        echo "<tr>";
        echo "<td>" . $row[1] . "</td>";
        echo "<td>" . $row[0] . "</td>";
        echo "<td>" . $row[2] . "</td>";
        echo "<td>" . $row[3] . "</td>";
        echo "<td>" . $row[4] . "</td>";
        echo "<td>" . $row[5] . "</td>";
        echo "<td>" . $row[7] . "</td>";
        echo "<td>" . $row[8] . "</td>";
        echo "<td>" . $row[9] . "</td>";
        
        
        echo "<td><a href='edit.php?mes=$row[0]'>EDIT</a></td>";
        echo "<td><a href='delete.php?mes=$row[0]'>DELETE</a></td>";

        echo "</tr>";
        $row_num--;

    }

echo "<center>";
for($b=1;$b<=$a;$b++)
{
    echo "<a id='page' href='admin.php?page=$b'>$b </a>";
}
echo "</table>";
echo "</center>";


?>
<div style="display:flex;padding-top: 50px; padding-left:500px;">
<a href="index.php"><button class="btn btn--radius-2 btn--red butt"  name="login" type="submit">LOGOUT</button></a></div>
</section>
<!-- Section: Design Block -->

    
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