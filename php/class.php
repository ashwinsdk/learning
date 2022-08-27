<?php
//index array
$names[0]="ashwin";
$names[1]="sanjay";
$names[2]="vignesh";
$names[3]="mithun";
// or
$names=array("ashwin","sanjay","vignesh","mithun");

//associative array
$names_1["1001"]="ashwin";
$names_1["1002"]="sanjay";
$names_1["1003"]="sam";
$names_1["1004"]="mithun";
// or
$names_1= array("1001"=>"ashwin","1002"=>"sanjay","1003"=>"sam","1004"=>"mithun");
//var_dump($names_1);

echo $names[0];
echo "<br>";
echo $names_1["1003"];
?>