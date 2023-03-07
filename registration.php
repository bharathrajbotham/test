<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<style>
body{
    margin: 0;
    padding: 20px;
    position: relative;
    
}
.form{
    width:800px;

}
.login-input {
    font-size: 15px;
    height: 25px;
    width: 300px;
}
fieldset{
    width:300px;
    float:right;
}
h1.login-title {
    border: 2px solid red;
  border-radius: 25px;
}
#result{
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
  padding: 10px 0;
  float:right;
  margin-right:250px
}
 </style>
    <script type="text/javascript">
                 function generateCaptcha()
                 {
                     var alpha = new Array('A','5','C','7','E','F','G','5','I','J','3','L','M','9','O','P','2','R','S','6','U','V','8','X','Y','0','a','b','1','d','e','f','g','3','i','j','k','l','6','n','!','@','#','$','%','&','*','~','0','x','y','z');
                     var i;
                     for (i=0;i<5;i++){
                       var a = alpha[Math.floor(Math.random() * alpha.length)];
                       var b = alpha[Math.floor(Math.random() * alpha.length)];
                       var c = alpha[Math.floor(Math.random() * alpha.length)];
                       var d = alpha[Math.floor(Math.random() * alpha.length)];
                        var e = alpha[Math.floor(Math.random() * alpha.length)];
                      }
                    var code = a + '' + b + '' + '' + c + '' + d+""+e;
                    document.getElementById("mainCaptcha").value = code
                  }
                  function CheckValidCaptcha(){
                      var string1 = removeSpaces(document.getElementById('mainCaptcha').value);
                      var string2 = removeSpaces(document.getElementById('txtInput').value);
                      if (string1 == string2){
                 document.getElementById('success').innerHTML = "Form is validated Successfully";
                 //alert("Form is validated Successfully");
                        return window.location.assign("index.html"); ;
                      }
                      else{       
                 document.getElementById('error').innerHTML = "Please enter a valid captcha."; 
                 //alert("Please enter a valid captcha.");
                        return "Check again" ;
                 
                      }
                  }
                  function removeSpaces(string){
                    return string.split(' ').join('');
                  }
    </script> 
<body>
<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
                $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
                $username = mysqli_real_escape_string($con, $username);
                $email    = stripslashes($_REQUEST['email']);
                $email    = mysqli_real_escape_string($con, $email);
                $password = stripslashes($_REQUEST['password']);
                $password = mysqli_real_escape_string($con, $password);
                $age = stripslashes($_REQUEST['age']);
                $age = mysqli_real_escape_string($con, $age);
                $phone = stripslashes($_REQUEST['phone']);
                $phone = mysqli_real_escape_string($con, $phone);
                $languages = stripslashes($_REQUEST['languages_known']);
                $languages = mysqli_real_escape_string($con, $languages);
                $gender = stripslashes($_REQUEST['gender']);
                $gender = mysqli_real_escape_string($con, $gender);
                $course = stripslashes($_REQUEST['course']);
                $course = mysqli_real_escape_string($con, $course);
                $dob = stripslashes($_REQUEST['birth_date']);
                $dob = mysqli_real_escape_string($con, $dob);
                $img = stripslashes($_REQUEST['image']);
                $img = mysqli_real_escape_string($con, $img);
                $file = stripslashes($_REQUEST['anyfile']);
                $file = mysqli_real_escape_string($con, $file);
                

        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `login` (username,email,password,age,phone,languages_known,gender,course,birth_date,image,anyfile,create_datetime)
                     VALUES ('$username', '$email', '$password','$age','$phone',' $languages','$gender','$course','$dob', '$img', '$file', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Registration</h1><br>
        <label>Username :</label>
        <input type="text" class="login-input" name="username" required />
        <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email :</label>
        <input type="text" class="login-input" name="email" ><br><br><br>
        <label>Password :</label>
        <input type="password" class="login-input" name="password">
        <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Age :</label>
        <input type="number" class="login-input" name="age" ><br><br><br>
        <label>Phone :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input type="number" class="login-input" name="phone" >
<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Languages:</label>
<input type="checkbox" name="languages_known" id="language" value="English"> English
<input type="checkbox" name="languages_known" id="language" value="Hindi"> Hindi 
<input type="checkbox" name="languages_known" id="language" value="Tamil"> Tamil<br><br><br>
    <label>Gender : </label>
    <input type="radio" name="gender"  value="Male">Male
    <input type="radio" name="gender" value="Female">Female 
    <label for="course">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Education:</label>
    <select name="course">
    <option name="course" value=""></option>
    <option name="course" value="UG">UG</option>
    <option name="course" value="PG">PG</option>
    <option name="course" value="PHD">PHD</option>
  </select>
    <label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DOB :</label>
    <input type="date" name="birth_date" id="birth_date"><br><br>

    <label for="name">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Captcha :</label>
                                <input type="text" id="mainCaptcha"readonly="readonly"required/>
								<input type="button" id="refresh" value="Refresh" onclick="generateCaptcha();" />
                                <label for="enter">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Enter:</label>
                                <input type="text"  id="txtInput"required/><br><br><br>
                               
            


<?php
if(isset($_post['upload'])){
    $file = $_FILES['image']['name'];
    $res = mysqli_query($con,$query);
    if ($res) {
        move_upload_files($_FILES['image']['tmp_name'], "$file");
    }
}

?>



<!--upload image -->
<label>UPLOAD PHOTO :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
<input id="files" type="file" name="image" multiple="multiple" accept="image/jpeg, image/png, image/jpg">
  <div><output id="result"></div><br>
  <!--End upload image-->
  <label>UPLOAD RESUME :&nbsp;&nbsp;&nbsp;</label>
   <input type="file" name="anyfile" id="anyfile">
   <div><output id="result"></div>
    <br>
  <script type="text/javascript">
 document.querySelector("#files").addEventListener("change", (e) => { //CHANGE EVENT FOR UPLOADING PHOTOS
  if (window.File && window.FileReader && window.FileList && window.Blob) { //CHECK IF FILE API IS SUPPORTED
    const files = e.target.files; //FILE LIST OBJECT CONTAINING UPLOADED FILES
    const output = document.querySelector("#result");
    output.innerHTML = "";
    for (let i = 0; i < files.length; i++) { // LOOP THROUGH THE FILE LIST OBJECT
        if (!files[i].type.match("image")) continue; // ONLY PHOTOS (SKIP CURRENT ITERATION IF NOT A PHOTO)
        const picReader = new FileReader(); // RETRIEVE DATA URI 
        picReader.addEventListener("load", function (event) { // LOAD EVENT FOR DISPLAYING PHOTOS
          const picFile = event.target;
          const div = document.createElement("div");
          div.innerHTML = `<img class="thumbnail" src="${}" title="${picFile.name}"/>`;
          output.appendChild(div);
        });
        picReader.readAsDataURL(files[i]); //READ THE IMAGE
    }
  } else {
    alert("Your browser does not support File API");
  }
});
</script>
<br>
<br>
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link">Already have an account? <a href="login.php">Login here</a></p>
    </form>
<?php
    }
?>
</body>
</html>
