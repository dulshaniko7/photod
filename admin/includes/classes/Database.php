<?php
include "new_config.php";
/*
define('HOST','localhost');
define('USER','dulshaniko');
define('PASS','zaqwsx');
define('DB_NAME','photo_gallery');
*/
class Database
{
    private $connection;

    function __construct()
    {
        $this->open_db();
    }

    public function open_db(){
     $this->connection = mysqli_connect(HOST,USER,PASS,DB_NAME);


     if(mysqli_connect_errno()){
         die("Database Error ".mysqli_error());
     }
 }

    public function query($sql){

        $result = mysqli_query($this->connection,$sql);

        if(!$result){
            die("Query Failed");
        }
        return $result;
    }

    public function escape_string($str){
        $escaped_string = mysqli_real_escape_string($this->connection,$str);
        return $escaped_string;
    }

}

?>