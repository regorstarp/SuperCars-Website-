<?php
	function getBrands(){
	require_once("./model/connectDB.php");
   $conn = connectDB();
   $sql = "SELECT * FROM Category";
	$stmt = $conn->prepare($sql);
	if ($stmt->execute() != true) {
		echo "Error: " . $sql . "<br>" . $conn->errorCode();
	}
   if(!$stmt){
		echo("Query error");
	}
   $conn = null;
   return $stmt;
	}
?>
