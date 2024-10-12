<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require('marklist.php');
$marks_obj = new marks("localhost", "user", "", "ab");
$conn = $marks_obj->getConnection();
$marks_obj->get_marks('10');
$marks_obj->update_marks('123','95');
/*
// SQL to create a table
$sqlCreateTable = "create table if not exist users (
    id int  primary key,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL
)";

if ($conn->query($sqlCreateTable) === TRUE) {
    echo "Table 'users' created successfully.<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}

// SQL to insert values into the table
$sqlInsert = "INSERT INTO users (username, email) VALUES
    ('user1', 'user1@gmail.com'),
    ('user2', 'user2@gamil.com')";

if ($conn->query($sqlInsert) === TRUE) {
    echo "Values inserted into 'users' table successfully.<br>";
} else {
    echo "Error inserting values: " . $conn->error . "<br>";
}
*/
// Close the database connection
//$dbConnection->closeConnection();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Table</title>
</head>
<body>
    
</body>
</html>