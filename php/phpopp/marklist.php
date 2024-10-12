<?php
$a;
$a=10;
class student{
    public $english;
    public $physics;
    public $chemistry;
    public $computer;
    public $maths;
    public $name;

    function set_marks($e,$p,$ch,$co,$m,$n){
        $this->english=$e;
        $this->physics=$p;
        $this->chemistry=$ch;
        $this->computer=$co;
        $this->maths=$m;
        $this->name=$n;

    }
    function display_marks(){
        $name=$this->name;
        $english=$this->english;
        $maths=$this->maths;
        $computer=$this->computer;
        $physics=$this->physics;
        $chemistry=$this->chemistry;
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
}
$ram= new student();
$ram->set_marks(10,11,12,13,14,"ram");
$ram->display_marks();
$sam= new student();
$sam->set_marks(10,11,12,13,14,"sam");
$sam->display_marks();

?>
