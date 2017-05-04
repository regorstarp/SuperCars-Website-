<?php
function getUserInfo($username){
	require_once("./model/connectDB.php");
	$conn = connectDB();
	$sql = "SELECT name,username,email,phone_number,address,city,postal_code,bank_account FROM Customer WHERE username = ?";
	$stmt = $conn->prepare($sql);
	if ($stmt->execute(array($username)) != true) {
	echo "Error: " . $sql . "<br>" . $conn->errorCode();
	}
	if(!$stmt){ echo("Query error");}
	$conn = null;
	return $stmt->fetch();
}
?>
