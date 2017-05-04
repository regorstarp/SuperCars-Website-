<?php
function getPurchases($username){
	require_once("./model/connectDB.php");
	$conn = connectDB();
	$sql = "SELECT customer_id FROM Customer WHERE username = ? ";
	$stmt = $conn->prepare($sql);
	if ($stmt->execute(array($username)) != true) {
	echo "Error: " . $sql . "<br>" . $conn->errorCode();
	}
	$id = $stmt->fetch();
	$sql = "SELECT * FROM Sale WHERE customer_id = ?";
	$stmt = $conn->prepare($sql);
	if ($stmt->execute(array($id['customer_id'])) != true) {
	echo "Error: " . $sql . "<br>" . $conn->errorCode();
	}
	$conn = null;
	return $stmt->fetchAll();
}
?>
