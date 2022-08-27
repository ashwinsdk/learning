<?php
$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Shift";
$cars[3] = "Audi";
$arrlength = count($cars);
echo '<br> Array Length: ' .$arrlength;
echo '<br>';
for ( $x = 0 ; $x < $arrlength ; $x++ ){
    echo $cars[$x];
    echo '<br>';
}
?>  