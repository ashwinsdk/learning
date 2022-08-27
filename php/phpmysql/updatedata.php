<?php
require "mysqldata.php";

$rollno=$_GET["rollno"];
$sql1="select * from result where rollno =".$rollno;
$query=mysqli_query($conn,$sql1);

$row=mysqli_fetch_assoc($query);
if(isset($_POST["submit"])){

      $student=$_POST["student_name"];
      $english = $_POST["english"];
      $maths = $_POST["maths"];
       $physics=$_POST["physics"];
      $chemistry = $_POST["chemistry"];
       $computer = $_POST["computer"];
   
       $sql2 = "UPDATE result SET name='$student',
       english='$english',maths='$maths',physics='$physics',chemistry='$chemistry',computer='$computer'
         WHERE rollno='$rollno'";
         
         echo $sql2;
   
         $run = mysqli_query($conn , $sql2);
         
         if($run){
            echo "successfully updated";
            
         }else{
             echo "failed to update record";
         }
   
}
mysqli_close($conn);
?>
<html>
    <head><title>Update data</title></head>
    <body>
        <form action="" method="POST">
            <input type="text" name="student_name" value="<?php echo $row["name"] ?>"><br><br>
            <input type="text" name="rollno" value="<?php echo $row["rollno"] ?>"><br><br>
            <input type="text" name="english" value="<?php echo $row["english"] ?>"><br><br>
            <input type="text" name="maths" value="<?php echo $row["maths"] ?>"><br><br>
            <input type="text" name="physics" value="<?php echo $row["physics"] ?>"><br><br>
            <input type="text" name="chemistry" value="<?php echo $row["chemistry"] ?>"><br><br>
            <input type="text" name="computer" value="<?php echo $row["computer"]?>"><br><br>
            <button type="submit" name="submit">Sumbit</button><br>
        </form>
        <a href="select.php">back to list data</a>
    </body>
</html>