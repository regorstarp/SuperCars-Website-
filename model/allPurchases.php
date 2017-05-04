<?php
function getAllPurchases(){
	require_once("./model/connectDB.php");
    $conn = connectDB();
    $sql = "SELECT * FROM Sale";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$conn = null;
	return $stmt->fetchAll();
}
?>
