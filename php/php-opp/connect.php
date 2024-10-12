<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
class DatabaseConnection {
    public $servername;
    public $username;
    public $password;
    public $database;
    public $conn;
    public $marks;

    // Constructor
    public function __construct($servername, $username, $password, $database) {
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->database);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
        //else{echo "connection success";}
    }

    public function getConnection() {
        return $this->conn;
    }

    public function __destruct() {
        if ($this->conn) {
            $this->conn->close();
            echo "connection closed";
        }
    }
    
}
// $dbConnection = new DatabaseConnection("localhost", "user", "", "ab");
// get connection $conn = $dbConnection->getConnection();
// close connection $dbConnection->closeConnection();

?>
