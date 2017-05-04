<?php
function purchase($price,$username){

	require_once("./model/connectDB.php");
   $conn = connectDB();
   $sql = "SELECT customer_id FROM Customer WHERE username = ? ";
   $stmt = $conn->prepare($sql);
   if ($stmt->execute(array($username)) != true) {
   echo "Error: " . $sql . "<br>" . $conn->errorCode();
   }
	$id = $stmt->fetch();
	$date = date('Y/m/d H:i:s');
   $sql = "INSERT INTO Sale (customer_id, date, total_price)
		VALUES (?,?,?)";
	$stmt = $conn->prepare($sql);
	if ($stmt->execute(array($id['customer_id'], $date, $price)) != true) {
		echo "Error: " . $sql . "<br>" . $conn->errorCode();
	}
	$conn = null;
}
?>
