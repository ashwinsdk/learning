<?php
session_start();
require "mysqldata.php";

if(isset($_POST["submit"])){
    $user=$_POST["user"];
    $password=$_POST["password"];
    $sql="select * from username where username='$user'and password='$password'";
    $query=mysqli_query($conn,$sql);
    $num_rows=mysqli_num_rows($query);
    if($num_rows==1)
    {
        $_SESSION["user"]=$user;
        header('location:select.php');
    }
    else{
        echo "worng password";
    }
}
?>