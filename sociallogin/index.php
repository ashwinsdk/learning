<?php
session_start();
require "requiredata.php";
$session=$_SESSION["email"];
if($session==true){}
else{
    header('location:login.php');
}
echo "hai"
?>