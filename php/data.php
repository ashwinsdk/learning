<?php
$subjects=array("english","maths","chemistry","physics","computer");
//this is a type of array
$ashwin[0]=67; //english
$ashwin[1]=90; //maths
$ashwin[2]=89; //chemistry
$ashwin[3]=78; //physics
$ashwin[4]=89; //computer
$sanjay=array('89','98','50','99','89');
$vignesh=array('59','58','70','96','86');
$mithun=array('45','58','80','97','89');
$ramesh=array('35','78','90','98','85');

$students["20656853"]='ashwin';
$students["20656854"]='sanjay';
$students["20656855"]='vignesh';
$students["20656856"]='mithun';
$students["20656857"]='ramesh';
$students["20656858"]='suresh';
$students["20656859"]='magesh';

$marks["20656853"]=$ashwin;
$marks["20656854"]=$sanjay;
$marks["20656855"]=$vignesh;
$marks["20656856"]=$mithun;
$marks["20656857"]=$ramesh;
$marks["20656858"]=$ramesh;
$marks["20656859"]=array('35','78','90','98','85');

$marks_1["20656853"]["name"]="ashwin";
$marks_1["20656853"]["marks"]=$ashwin;
$marks_1["20656854"]["name"]="sanjay";
$marks_1["20656854"]["marks"]=$sanjay;
$marks_1["20656855"]["name"]="vignesh";
$marks_1["20656855"]["marks"]=$vignesh;
$marks_1["20656856"]["name"]="mithun";
$marks_1["20656856"]["marks"]=$mithun;
$marks_1["20656857"]["name"]="ramesh";
$marks_1["20656857"]["marks"]=$ramesh;
$marks_1["20656857"]["name"]="suresh";
$marks_1["20656857"]["marks"]=$ramesh;
$marks_1["20656859"]["name"]="magesh";
$marks_1["20656859"]["marks"]=array('35','78','90','98','85');
//var_dump($marks_1["20656853"]["name"]); 

$marks_2 = array(
    "20656853" => array(
        "name" => "ashwin",
        "marks" => $ashwin
    ),
    "20656854" => array(
        "name" => "sanjay",
        "marks" => $sanjay
    ),
    "20656855" => array(
        "name" => "vignesh",
        "marks" => $vignesh
    ),
    "20656856" => array(
        "name" => "mithun",
        "marks" => $mithun
    ),
    "20656857" => array(
        "name" => "ramesh",
        "marks" => $ramesh
    ),
    "20656858" => array(
        "name" => "suresh",
        "marks" => $ramesh
    ),
    "20656859" => array(
        "name" => "magesh",
        "marks" => $ramesh
    )
    );
//var_dump($marks_2);

$marks_3=array(
    "20656853" => array(
        "name" => "ashwin",
        "english" => "67",
        "maths" => "78",
        "physics" => "89",
        "chemistry" => "90",
        "computer" => "80",
    ),
    "20656854" => array(
        "name" => "sanjay",
        "english" => "67",
        "maths" => "78",
        "physics" => "89",
        "chemistry" => "90",
        "computer" => "80",
    ),
    "20656855" => array(
        "name" => "vignesh",
        "english" => "67",
        "maths" => "78",
        "physics" => "89",
        "chemistry" => "90",
        "computer" => "80",
    ),
    "20656856" => array(
        "name" => "mithun",
        "english" => "67",
        "maths" => "78",
        "physics" => "89",
        "chemistry" => "90",
        "computer" => "80",
    ),
    "20656857" => array(
        "name" => "ramesh",
        "english" => "67",
        "maths" => "78",
        "physics" => "89",
        "chemistry" => "90",
        "computer" => "80",
    ),
    "20656858" => array(
        "name" => "suresh",
        "english" => "67",
        "maths" => "78",
        "physics" => "89",
        "chemistry" => "90",
        "computer" => "80",
    ),
    "20656859" => array(
        "name" => "magesh",
        "english" => "67",
        "maths" => "78",
        "physics" => "89",
        "chemistry" => "90",
        "computer" => "80",
    ),
);
?>
