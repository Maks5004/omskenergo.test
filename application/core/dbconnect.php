<?php

class Dbconnect{

    public function connect(){
         $host = 'localhost';
         $user = 'omskenergo.test';
         $pass = 'test';
         $db = 'omskenergo.test';
         $connection = mysqli_connect($host,$user,$pass,$db); 
         return $connection;
     }
}