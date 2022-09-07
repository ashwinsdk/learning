<?php
session_start();
require "mysqldata.php";
$session=$_SESSION["user"];
if($session==true){}
else{
    header('location:loginform.php');
}
$sql= "select * from result;";
$query=mysqli_query($conn,$sql);
?>
<html>
    <head>
        <title>Students Results</title>
        <style>
   table{
    border-collapse:collapse;
    width:300px;
   }
   td,th{
    border: 2px black solid;
   }
   .heading{
    background-color: #c0b5b5;    
   }
   </style>
    </head>
    <body>
        <h1>Students Results</h1>
        <table>
            <tr class="heading">
                <th>S_no</th>
                <th>Name</th>
                <th>Rollno</th>
                <th>English</th>
                <th>Maths</th>
                <th>Physics</th>
                <th>Chemistry</th>
                <th>Computer</th>
                <th>Edit</th>
            </tr>
            <?php
            while($row=mysqli_fetch_assoc($query)){
                echo "<tr><td>".$row["s_no"]."</td>";
                echo "<td>".$row["name"]."</td>";
                echo "<td>".$row["rollno"]."</td>";
                echo "<td>".$row["english"]."</td>";
                echo "<td>".$row["maths"]."</td>";
                echo "<td>".$row["physics"]."</td>";
                echo "<td>".$row["chemistry"]."</td>";
                echo "<td>".$row["computer"]."</td>";
                echo "<td><a href='updatedata.php?rollno=".$row["rollno"]."'>edit</a></td></tr>";
            }
            ?>

        </table>
    </body>
</html>
<?php
mysqli_close($conn);
?>