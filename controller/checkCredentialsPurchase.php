<?php
	$username = test_input($_POST['Username']);
	$password = test_input($_POST['psw']);
	$password = str_replace('"', "'",$password);
	require_once("./model/checkLogin.php");
	$hashedPassword = checkLogin($username,$password);
	if (password_verify($password,$hashedPassword)){
		header('Refresh: 0; URL = /~tdiw-h1/purchase/checkout');
	}
	else{
		header("location:javascript://history.go(-1)");
	}

	function test_input($data) {
  		$data = trim($data);
  		$data = stripslashes($data);
  		$data = htmlspecialchars($data);
  		return $data;
	}
 ?>
