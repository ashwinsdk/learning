<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$server="localhost";
$user="root";
$password="";

$conn= mysqli_connect($server,$user,$password);

//connection
if (!$conn){
    die("connection failed".mysqli_connect_error() );
}

//create database
$sql="create database ab";
$result= mysqli_query($conn,$sql);
if($result){
    echo "database successfully created";
} 
else{
    echo "error". mysqli_error($conn);
}

mysqli_close($conn);
?>