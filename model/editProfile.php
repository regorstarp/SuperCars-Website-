<?php
	function update_info($params){
    	require_once("./model/connectDB.php");
    	$conn = connectDB();
   	 	$sql = "UPDATE Customer SET name=?, password=?, phone_number=?, address=?, city=?, postal_code=?, bank_account=? WHERE username=?";
		$stmt = $conn->prepare($sql);
		if ($stmt->execute($params) != true) {
			echo "Error: " . $sql . "<br>" . $conn->errorCode();
		}
      	if(!$stmt){ echo("Query error");}
    	$conn = null;
	}

?>
