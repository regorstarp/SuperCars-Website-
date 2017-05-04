<?php
	function searchProduct($name){
	require_once("./model/connectDB.php");
	$conn = connectDB();
	$sql = "SELECT * FROM Product WHERE product_name LIKE ?";
	$stmt = $conn->prepare($sql);
	$stmt->execute(array('%'.$name.'%'));
	if(!$stmt){
		echo("Query error");
	}
	$conn = null;
	return $stmt->fetchAll();
	}
?>
