<?php
	function checkLogin($login){
	require("../model/connectDB.php");
	$query = "select * from User where login=:login";    
	$con = (new DataBaseCon())->getCon();
	$stmt = $con->prepare($query);
	$stmt->bindParam(':login', $login);   
	$stmt->execute();
	    
	$result = $stmt->fetch();
	return $result;
	}    
?>