<?php
function checkLogin($username,$password){
	require_once("./model/connectDB.php");
	$success = false;
   $conn = connectDB();
 	$sql = "SELECT password from Customer where username=?";
	$stmt = $conn->prepare($sql);
	$stmt->execute(array($username));
	$hashedPassword = $stmt->fetch();
	$conn = null;
	return $hashedPassword['password'];
	}
?>
