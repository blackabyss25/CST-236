<?php

class Database {
    
    private $dbserver = "localhost";
    private $dbusername = "root";
    private $dbpassword = "root";
    private $dbname = "ical7";
    
    function getConnection(){
        $conn = new mysqli($this->dbserver, $this->dbusername, $this->dbpassword, $this->dbname);
        if($conn->connect_error){
            echo "Connection Failed " . $conn->connect_error . " <br>";
        }
        else {
            //echo "Database Connection Established.";
            return $conn;
        }
    }
    
    
    
    
    
    
}