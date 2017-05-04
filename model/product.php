<?php
	function getProduct($product_id){
    	require_once("./model/connectDB.php");
    	$conn = connectDB();
   	 	$sql = "SELECT * FROM Product WHERE product_id = ?";
			$stmt = $conn->prepare($sql);
			if ($stmt->execute(array($product_id)) != true) {
				echo "Error: " . $sql . "<br>" . $conn->errorCode();
			}
      if(!$stmt){
				echo("Query error");
			}
    	$conn = null;
    	return $stmt;
	}

?>
