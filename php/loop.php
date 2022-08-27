<?php
require "data.php";
//var_dump($_GET);
$rollno=$_GET["rollno"];
$name=$students[$rollno];
echo "<br>name:".$name."<br>rollno:" .$rollno;
echo "<style>
table{
    border-collapse:collapse;
    width:30%;
}
td,th{
    border: 1px solid black;
}
th{
    background-color:grey;
}
</style>";
$length1=count($ashwin);
$length2=count($sanjay);
$length3=count($vignesh);
$length4=count($mithun);
$length5=count($ramesh);
if($name=="ashwin" || $rollno=="20656853"){
//ashwin
echo "<h1>Ashwin</h1>";
echo "<table>";
echo "<tr><th>Subjects</th><th>Marks</th></tr>";
for($x=0; $x < $length1 ; $x++){
 echo "<tr><td>".$subjects[$x]."</td><td>".$ashwin[$x]."</td></tr>";
}
echo "</table>";
}
//sanjay
if($name=="sanjay" || $rollno=="20656854"){
echo "<h1>Sanjay</h1>";
echo "<table>";
echo "<tr><th>Subjects</th><th>Marks</th></tr>";
for($x=0; $x < $length2 ; $x++){
 echo "<tr><td>".$subjects[$x]."</td><td>".$sanjay[$x]."</td></tr>";
}
echo "</table>";
}
//vignesh
if($name=="vignesh" || $rollno=="20656855"){
echo "<h1>Vignesh</h1>";
echo "<table>";
echo "<tr><th>Subjects</th><th>Marks</th></tr>";
for($x=0; $x < $length3 ; $x++){
 echo "<tr><td>".$subjects[$x]."</td><td>".$vignesh[$x]."</td></tr>";
}
echo "</table>";
}
//mithun
if($name=="mithun" || $rollno=="20656856"){
echo "<h1>Mithun</h1>";
echo "<table>";
echo "<tr><th>Subjects</th><th>Marks</th></tr>";
for($x=0; $x < $length4 ; $x++){
 echo "<tr><td>".$subjects[$x]."</td><td>".$mithun[$x]."</td></tr>";
}
echo "</table>";
}
//ramesh
if($name=="ramesh" || $rollno=="20656857"){
echo "<h1>Ramesh</h1>";
echo "<table>";
echo "<tr><th>Subjects</th><th>Marks</th></tr>";
for($x=0; $x < $length5 ; $x++){
 echo "<tr><td>".$subjects[$x]."</td><td>".$ramesh[$x]."</td></tr>";
}
echo "</table>";
}
?>