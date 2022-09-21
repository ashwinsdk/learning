<?php
session_start();
require "requiredata.php";

if(isset($_POST["submit"])){
    $email=$_POST["email"];
    $password=$_POST["password"];
    $sql="select * from email where email='$email'and password='$password'";
    $query=mysqli_query($conn,$sql);
    $num_rows=mysqli_num_rows($query);
    if($num_rows==1)
    {
        $_SESSION["email"]=$email;
        header('location:index.php');
    }
    else{
        echo "worng password";
    }
}
?>