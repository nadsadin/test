<?php

class DB{
    private $db_connection;
    public function __construct(){
        $this->db_connection = new mysqli('localhost', 'test', 'test123', 'test');
        if ($this->db_connection->connect_error) {
            die("Connection failed: " . $this->db_connection->connect_error);
        }
    }
    public function query ($query){
        return $this->db_connection->query($query);
    }
    public function escape_string($string){
        return $this->db_connection->escape_string($string);
    }
    public function prepare($query){
        return $this->db_connection->prepare($query);
    }
    public function __destruct()
    {
        $this->db_connection->close();
    }
}