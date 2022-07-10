<?php
include 'dbconnect.php';
class Dao extends dbconnect {

    private $conn; 
    public function __construct() { 
       $dbcon = new parent(); 
       $this->conn = $dbcon->connect();
       mysqli_query($this->conn, "SET NAMES UTF8");
       mysqli_query($this->conn, "SET CHARACTER SET UTF8");
    }

    public function select( $table , $where='' , $other='' ){
       if($where != '' ){  // condition was wrong
         $where = 'WHERE ' . $where; // Added space 
       }
       $sql = "SELECT * FROM ".$table." " .$where. " " .$other;

       $sele = mysqli_query($this->conn, $sql) or die(mysqli_error($this->conn));
       
       $i = 0;
       while ($row = mysqli_fetch_assoc($sele)) 
       {
         $data[$i] = $row;
         $i = $i + 1;
       }

       return $data;
    }

    public function insert( $table , $names , $values){
       $sql = "INSERT INTO ".$table." (".$names. ") VALUES (" .$values.")";
       $sele = mysqli_query($this->conn, $sql) or die(mysqli_error($this->conn));
       return $sele;
    }

   }