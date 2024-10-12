<?php
function marks($m1,$m2,$m3,$m4,$m5,$name){
    $english=$m1;
    $maths=$m2;
    $computer=$m3;
    $physics=$m4;
    $chemistry=$m5;
    $total=$english+$maths+$computer+$physics+$chemistry;


   echo "<style>
   table{
    border-collapse:collapse;
    width:300px;
   }
   td,th{
    border: 2px black solid;
   }
   .total{
    background-color: #c0b5b5;    
   }
   </style>";


    echo"<h1>".$name."</h1>";
    echo "<table>";
    echo "<tr class='total'>
    <th>Subject</th>
    <th>Marks</th>
    </tr>";
    echo"<tr>
    <td>English :</td>
    <td>".$english."</td>
    </tr>";
    echo"<tr>
    <td>Maths :</td>
    <td>".$maths."</td>
    </tr>";
    echo"<tr><td>Computer :</td><td>".$computer."</td></tr>";
    echo"<tr><td>Physics :</td><td>".$physics."</td></tr>";
    echo"<tr><td>Chemistry :</td><td>".$chemistry."</td></tr>";
    echo"<tr class='total'><td><b>Total marks:</b></td><td><b>".$total."</b></td></tr>";
    echo "</table>";
}
marks(10,12,23,34,56,"Ram");
echo "<br>";
marks(24,14,53,36,76,"Sam");
echo "<br>";
marks(40,52,63,74,86,"Ashwin");
?>
<table style=' border: 2px solid black;'></table>