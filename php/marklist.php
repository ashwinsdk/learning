<?php
require "data.php";
?>
<html>
    <head>
<title>Mark List</title>
<style>
    table{
    border-collapse:collapse;
    width:40%;
}
td,th{
    border: 1px solid black;
}
th{
    background-color:rgba(49, 190, 233, 0.658);
}
</style>
    </head>
<body>
    <table>
        <tr>
            <th>S.no</th>
            <th>Name</th>
            <th>Rollno</th>
            <th>English</th>
            <th>Maths</th>
            <th>Physics</th>
            <th>Chemistry</th>
            <th>Computer</th>
        </tr>
        <?php
        $i=1;
        foreach($marks_3 as $key => $value){
        ?>
        <tr>
            <td><?php echo $i++ ?></td>
            <td><?php echo $value["name"]?></td>
            <td><?php echo $key?></td>
            <td><?php echo $value["english"]?></td>
            <td><?php echo $value["maths"]?></td>
            <td><?php echo $value["physics"]?></td>
            <td><?php echo $value["chemistry"]?></td>
            <td><?php echo $value["computer"]?></td>
        </tr>
        <?php } ?>
    </table>
</body>
    </html>
