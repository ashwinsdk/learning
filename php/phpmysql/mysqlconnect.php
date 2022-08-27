<?php
$server="localhost";
$user="root";
$password="";

$conn= mysqli_connect($server,$user,$password);

if (!$conn){
   die("connection failed:". mysqli_connect_error()); 
}
echo "connetion successful";
?>