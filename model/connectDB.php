<?php
    function connectDB(){
        $servername = "localhost";
        $username = "tdiw-h1";
        $password = "eijooneu";
        $dbname = "tdiw-h1";
        try {
          $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
          // set the PDO error mode to exception
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e)
        {
          echo "Connection failed: " . $e->getMessage();
        }
        return $conn;
    }
?>
