<?php
echo "<style>
table{
    border-collapse:collapse;
    width:30%;
    height:30%;
    margin-left:450px;
    margin-top:200px;
}
td,th{
    border: 1px solid black;
}
th{
    background-color:rgba(49, 190, 233, 0.658);
}
a{
    text-decoration:none;
}
</style>";
echo "<table>";
echo "<tr><th>Names</th><th>Rollno</th></tr>";
echo "<tr><td><a href='loop.php?rollno=20656853'>Ashwin</a></td><td>20656853</td></tr>";
echo "<tr><td><a href='loop.php?rollno=20656854'>Sanjay</a></td><td>20656854</td></tr>";
echo "<tr><td><a href='loop.php?rollno=20656855'>Vignesh</a></td><td>20656855</td></tr>";
echo "<tr><td><a href='loop.php?rollno=20656856'>Mithun</a></td><td>20656856</td></tr>";
echo "<tr><td><a href='loop.php?rollno=20656857'>Ramesh</a></td><td>20656857</td></tr>";
echo "</table>";
?>