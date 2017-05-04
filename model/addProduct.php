<?php
	function addProduct($params){
		require_once("./model/connectDB.php");
	    $conn = connectDB();
	    $sql = "INSERT INTO Product (product_name, category_id, brief_description, full_description, price_tag, image)
		VALUES (?,?,?,?,?,?)";
		$stmt = $conn->prepare($sql);
		if ($stmt->execute($params) != true) {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
		$conn = null;
	}
 ?>
