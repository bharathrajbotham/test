<?php
include ("config.php");
if(!isset($_GET['mes']))
{
    header("location:admin.php");
}
else {
    $show = "SELECT* FROM register";
    $result = mysqli_query($conn, $show);
    $id = $_GET['mes'];
    $sql = "DELETE FROM register WHERE name='$id'";
    mysqli_query($conn, $sql);
    header("location:admin.php");
}
?>
