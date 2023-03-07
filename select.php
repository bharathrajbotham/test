<?php
session_start();

session_start();
if(!isset( $_SESSION['username']))
{
    header("location:home.php");
}
//$user=$_SESSION['login_user'];

include "db.php";

$username=$_POST['username'];
$password=$_POST['password'];

$sql= "SELECT * FROM `login` WHERE username='$username'
AND password='$password'";

$result=mysqli_query($con,$sql);

$count=mysqli_num_rows($result);

if($count>0){
    header("location: home.php");
    $_SESSION["username"]=$username;
}else{
    header("location: login.php");
}
?>