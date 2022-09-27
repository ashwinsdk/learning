<?php
session_start();
require "requiredata.php";

$session=$_SESSION["email"];
if($session==true){}
else{
    header('location:login.php');
}

?>
<html>
    <head><title></title></head>
    <body>
        <h1>Hello World!</h1>
    </body>
</html>
