<?php
require "mysqldata.php";

//create table
$sql="create table result (
    s_no int(10),
    name varchar(20),
    rollno int(20),
    english int(10),
    maths int(10),
    physics int(10),
    chemistry int(10),
    computer int(10)
);";
if(mysqli_query($conn,$sql)){
    echo "table successfully created";
} 
else{
    echo " error ". mysqli_error($conn);
}

mysqli_close($conn); 
?><s></s>