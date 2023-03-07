<html>
    <head>
    <link rel="stylesheet" href="style.css"/>
        <style>




h1{

    color: black;
    margin: 0px auto 25px;
    font-size: 25px;
    font-weight: 300;
    text-align: center;
  
}
.detail{
    margin: 50px auto;
    width: 400px;
    padding: 30px 25px;
    background: red;
    border-radius: 15px;
    
}
.login-input {
    font-size: 15px;    
    height: 35px;
    width: 400px;
}
label{
    font-size:20px;
}
.log{
float: right;
  

}
</style>
</head>
<body>
<?php
session_start();
if(!isset( $_SESSION['username']))
{
    header("location:select.php");
}
$user=$_SESSION['username'];
?>

<?php

 include ("db.php");

 $sql="SELECT * FROM login WHERE username ='$user'";
 $result=mysqli_query($con,$sql);
 $row = mysqli_fetch_array($result);


?>
<form class="detail"action="logout.php" method="GET">
<h1>WELCOME <?php echo strtoupper($user); ?></h1>
<label>Name :</label>
<input type="disable" readonly="readonly" class="login-input" value="<?php echo $row[1];?>"/><br>
<label>EMAIL :</label>
<input type="disable" readonly="readonly" class="login-input" value="<?php echo $row[2];?>"/><br>
<label>AGE :</label>
<input type="disable" readonly="readonly" class="login-input" value="<?php echo $row[4];?>"/><br>
<label>PHONE :</label>
<input type="disable" readonly="readonly" class="login-input" value="<?php echo $row[5];?>"/><br>
<label>GENDER :</label>
<input type="disable" readonly="readonly" class="login-input" value="<?php echo $row[7];?>"/><br>
<label>DATE OF BIRTH :</label>
<input type="disable" readonly="readonly" class="login-input" value="<?php echo $row[9];?>"/><br>
<label>LANGUAGE :</label>
<input type="disable" readonly="readonly" class="login-input" value="<?php echo $row[6];?>"/><br>
<label>QUALIFICATION :</label>
<input type="disable" readonly="readonly" class="login-input" value="<?php echo $row[8];?>"/><br><br><br>
<label>PROFILE PHOTO :</label>
<input type="image"   value="<?php echo $row[10];?>"/><br><br><br>
<div align="right" style="width:150px; float:right; vertical-align:top; margin-right:10px; margin-top:0px"><img src="<?php echo $row['image']?>" width="150" height="150" /></div>
      <table width="500" height="27" border="0" cellpadding="0" cellspacing="0">
<label>Input File :</label>
<input type="file"   value="<?php echo $row[11];?>"/><br><br><br>
<div class="log">
 <input type="submit" name="logout" value="Logout" style="height: 40px; width: 150px;font-size:20px">
</div>
<div class="print">
 <button onclick="window.print()" style="height: 40px; width: 150px;font-size:20px ">Print </button>
</div>
</form>


</body>
</html>


