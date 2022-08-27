<?php
$server="localhost";
$user="root";
$password="";
$dbname="students_results";
$conn= mysqli_connect($server,$user,$passward,$dbname);
if(!$conn){
    die("connnection failed" .mysqli_connect_error());
}
?>