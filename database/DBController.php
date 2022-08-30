<?php
class DBController {
    //Database connection properties
    protected $host = 'localhost:3307';
    protected $user = 'root';
    protected $password = '';
    protected $database = 'shopee';

    // connection property
    public $conn = null;

    //call construction
    public function __construct() {
        $this->conn = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if($this->conn->connect_error) {
            echo "Fail ". $this->conn->connect_error;
        } 
    }

    public function __destruct() {
        $this->closeConnection();
    }

    //for closing connection mysql 
    public function closeConnection() {
        if($this->conn != null) {
            $this->conn->close();
            $this->conn = null;
        }
    }

    

}
