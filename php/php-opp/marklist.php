<?php
require "connect.php";
class marks extends DatabaseConnection{
    function get_marks($rollno){
        $sql="select * from students;";
        $run = mysqli_query($this->conn, $sql);
        //var_dump($this->conn);
    }
    function update_marks($rollno,$marks){
        $sql1 = "select * from students where rollno ='$rollno'";
        echo $sql1;
        $query = mysqli_query($this->conn, $sql1);
        $sql2 = "update students set marks='$marks' where rollno='$rollno'";
        $run = mysqli_query($this->conn, $sql2);
    }
    
}
?>