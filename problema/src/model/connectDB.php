<?php 


  class DataBaseCon {
  private $con;
  function __construct(){
    $host = "localhost";
    $db = "test";
    $user = "test";
    $pass = "test";
    $this->con = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass, 
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  }  
  
  function getCon(){
    return $this->con;
  }
}
?> 

