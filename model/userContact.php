<?php
function contact($params){
	require_once("./model/connectDB.php");
	$conn = connectDB();
	$sql = "INSERT INTO Contact (name, email, details) VALUES (?,?,?)";
	$stmt = $conn->prepare($sql);

  if ($stmt->execute($params) != true) {
 	echo "Error: " . $sql . "<br>" . $conn->error;
	}
  $conn = null;
}
?>
