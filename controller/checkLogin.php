<?php
$username = test_input($_POST['Username']);
$password = test_input($_POST['psw']);
require_once("./model/checkLogin.php");
$hashedPassword = checkLogin($username,$password);
if (password_verify($password,$hashedPassword)){
	if(isset($_SESSION['incorrect_password'])){
		unset($_SESSION['incorrect_password']);
		}
	if (!isset($_SESSION['username'])){
    	$_SESSION['username'] = $username;
	}

	if (strcmp($username,"admin") == 0){
		header('Refresh: 0; URL = /~tdiw-h1/product/add');
		//header('Refresh: 0; URL = ../product/create');
	}
	else{
		header('Refresh: 0; URL = /~tdiw-h1/user/profile');
		//header('Refresh: 0; URL = ../user/read');
	}

}
else{
	echo "Wrong Username/password";
}

function test_input($data) {
  		$data = trim($data);
  		$data = stripslashes($data);
  		$data = htmlspecialchars($data);
  		return $data;
	}
?>
