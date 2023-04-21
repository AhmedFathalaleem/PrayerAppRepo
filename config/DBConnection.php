<?php


class DBConnection{
    public $conn;

    public function __construct(){
        
        $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

        if($conn->connect_errno){
            die("<h1>Connection Error</h1>");
        }
        /* echo("Connection success"); */
        return $this->conn = $conn;

    }




}




?>