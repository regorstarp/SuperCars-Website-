<?php
	function getBrandDetail($brand_id){
    	require_once("./model/connectDB.php");
    	$conn = connectDB();
   	 	$sql = "SELECT * FROM Product WHERE category_id = ?";
			$stmt = $conn->prepare($sql);
			if ($stmt->execute(array($brand_id)) != true) {
				echo "Error: " . $sql . "<br>" . $conn->errorCode();
			}
      if(!$stmt){ echo("Query error");}
    	$conn = null;
    	return $stmt;
	}

?>
