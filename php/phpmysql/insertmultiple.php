<?php
require "mysqldata.php";

//inserting multiple rows
$sql="insert into result(s_no,name,rollno,english,maths,physics,chemistry,computer)
values(2,'sanjay',20656854,67,78,90,67,56);";

$sql .="insert into result(s_no,name,rollno,english,maths,physics,chemistry,computer)
values(3,'vignesh',20656855,56,76,67,45,98);";

$sql .="insert into result(s_no,name,rollno,english,maths,physics,chemistry,computer)
values(4,'mithun',20656856,87,46,54,35,45);";

$sql .="insert into result(s_no,name,rollno,english,maths,physics,chemistry,computer)
values(5,'ramesh',20656857,56,46,70,97,52);";

$query=mysqli_multi_query($conn,$sql);
if($query){
    echo "rows inserted successfully";
}
else{
    echo "error:" .$sql. "<br>" .mysqli_error($conn);
}

mysqli_close($conn)
?>