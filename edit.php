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
            
              <li class="nav-item"><a href="register.php" class="nav-link">Register</a></li>
              <li class="nav-item active"><a href="user.php" class="nav-link">User Detail</a></li>
              
            </ul>
          </div>
        </div>
      </nav>
      <!-- END nav -->
  
    </section>

    <section>
    <?php
include ("config.php");
if(!isset($_GET['mes']))
{
    header("location:admin.php");
}
$name=$_GET['mes'];

$sqli="SELECT * FROM register WHERE name='$name'";
$result=mysqli_query($conn,$sqli);
$row = mysqli_fetch_array($result);
$a=$row['skill'];
$b=explode(",",$a);
$c=$row['gender'];

?>
      <center>
        <h1>EDIT DETAILS</h1>
        <form  style="margin: auto; width:800px;" action="update.php" method="post" enctype="multipart/form-data">
                        <div class="form-row m-b-55">
                            <div class="name">Name</div>
                            <div class="value">
                                 <div class="input-group">
                                    
                                            <input class="input--style-5" type="text" name="name" value="<?php echo $row[0];?>"onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Your Name *" required data-validation-required-message="Please enter your name.">
                                        
                                    
                                </div>
                             </div>
                            </div>
                        <div class="form-row">
                            <div class="name">Date of Birth</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="date" name="date" value="<?php echo $row[2];?>" placeholder="DOB*" required data-validation-required-message="Please enter your date of birth.">
                                </div>
                            </div>
                        </div>

                        <div class="form-row m-b-55">
                            <div class="name">Gender</div>
                            <div class="value">
                            <div class="input-group input--style-5">
                                <label class="radio-container m-r-55"> Male
                                    <input  type="radio" value="Male" <?php if($c=="male"){ echo "checked";} ?>name="gender" required data-validation-required-message="Please select your gender.">
                                    <span class="checkmark"></span>
                                  </label>
                                <label class="radio-container  m-r-55"> Female
                                    <input  type="radio" value="Female" <?php if($c=="female"){ echo "checked";} ?>name="gender" required data-validation-required-message="Please select your gender.">
                                    <span class="checkmark"></span>
                                  </label>
                                <label class="radio-container  m-r-55"> Other
                                    <input  type="radio" name="gender"<?php if($c=="other"){ echo "checked";} ?> value="other" required data-validation-required-message="Please select your gender.">
                                    <span class="checkmark"></span>
                                  </label>
                                  </div></div></div>
                                  </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Phone Number</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="phonenumber" value="<?php echo $row[4];?>"maxlength="10" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'');" placeholder="Phone number*" required data-validation-required-message="Please enter your phone number.">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" <?php echo $row[5];?>autocomplete="off" type="email" placeholder="*E-Mail" name="email" required data-validation-required-message="Please enter your E-mail id.">
                                </div>
                            </div>
                        </div>
                        <div class="form-row ">
                            <div class="name">Password</div>
                            <div class="value">
                            <div class="input-group">
                                            <input class="input--style-5" type="password"<?php echo $row[6];?> placeholder="*Password" name="password" required data-validation-required-message="Please enter your Password.">
                                           
                                        </div>
                                    </div>
                                </div>
                            
                        <div class="form-row">
                            <div class="name">Qualification</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2  js-select-simple select--no-search">
                                        <select <?php echo $row[7];?> name="qualification">
                                            <option disabled="disabled" selected="selected">Choose option</option>
                                            <option>B.E</option>
                                            <option>M.E</option>
                                            <option>B.SC</option>
                                            <option>M.SC</option>
                                            <option>B.A</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">Skill</div>
                            <div class="value">
                                     <div class="input-group input--style-5">
                                     <label >HTML        
                                     <input class="radio-container m-r-55"  <?php if(in_array("HTML",$b)){echo "checked";}?> type="checkbox" value="HTML" name="skill[]">
                                           </label>
                                       
                                       
                                        <label>CSS    
                                        <input class="radio-container m-r-55" type="checkbox"  <?php if(in_array("CSS",$b)){echo "checked";}?>value="CSS" name="skill[]">
                                            </label>
                                        
                                       
                                        <label>JAVASCRIPT    
                                        <input class="radio-container m-r-55"  type="checkbox" <?php if(in_array("JAVASCRIPT",$b)){echo "checked";}?> value="JAVASCRIPT" name="skill[]">
                                           </label>
                                        <label>JSON
                                            <input class="radio-container m-r-55"  type="checkbox" <?php if(in_array("JSON",$b)){echo "checked";}?> value="JSON" name="skill[]">
                                           </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row ">
                            <div class="name">Address</div>
                            <div class="value">
                            <div class="input-group">
                                            <input class="input--style-5" type="text" <?php echo $row[9];?> name="address" required data-validation-required-message="Please enter your City.">
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row ">
                            <div class="name">IMAGE</div>
                            <div class="value">
                            <div class="input-group">
                                            <input class="input--style-5" type="file" <?php echo $row[10];?> name="document">
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row ">
                            <div class="name">Document</div>
                            <div class="value">
                            <div class="input-group">
                                            <input class="input--style-5" type="file" <?php echo $row[11];?> name="document1">
                                           
                                        </div>
                                    </div>
                                </div>



                        <div>
                            <button class="btn btn--radius-2 btn--red"  name="edit" type="submit">EDIT</button></a>
                        </div>
                    </form>



</center>
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
         <!-- <div class="col-md">
            <ul class="list-unstyled nav-links">
              <li><a href="#">Clients</a></li>
              <li><a href="#">Team</a></li>
              <li><a href="#">Career</a></li>
              <li><a href="#">Testimonials</a></li>
              <li><a href="#">Journal</a></li>
            </ul>
          </div>
          <div class="col-md">
            <ul class="list-unstyled nav-links">
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Terms &amp; Conditions</a></li>
              <li><a href="#">Partners</a></li>
            </ul>
          </div>-->
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