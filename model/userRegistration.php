<?php
	function register($params){
		require_once("./model/connectDB.php");
		$conn = connectDB();
		$sql = "INSERT INTO Customer (name, username, password,
			email, phone_number, address, city, postal_code, bank_account)
		VALUES (?,?,?,?,?,?,?,?,?)";
		$stmt = $conn->prepare($sql);


		if ($stmt->execute($params) != true) {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
		$conn = null;
	}
	function isUserRegistered($username){
		require_once("./model/connectDB.php");
		$conn = connectDB();
		$sql = "SELECT * FROM Customer WHERE username = ?";
		$stmt = $conn->prepare($sql);
		$exists = false;
		if ($stmt->execute(array($username)) === true) {
			$result = $stmt->fetch(PDO::FETCH_ASSOC);
			if (!empty($result)){
				$exists = true;
			}
		} else {
			echo "Error: " . $sql . "<br>" . $conn->errorCode();
		}
		return $exists;
	}
 ?>
