<?php
require "mysqldata.php";

//inserting a row
$sql="insert into result(s_no,name,rollno,english,maths,physics,chemistry,computer)
values (1,'ashwin',20656853,56,45,67,78,89);";
$query=mysqli_query($conn,$sql);
if($query){
    echo "new row inserted";
}
else{
    echo "error: " .$sql. "<br>" .mysqli_error($conn);
}
echo "connection closed";
mysqli_close($conn);
?>