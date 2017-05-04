<?php
	$formatErr = 0;
	$name = test_input($_POST['Name']);
	// nomes caracters i espais i mida com a maxim 40
	if (!preg_match('/^[a-zA-Z\s]+$/',$name) || strlen($name) > 40) {
    	$formatErr = "Wrong name format";
    	goto end;
	}
	$userName = test_input($_POST['Username']);
	if (!preg_match('/^[a-z0-9A-Z]+$/',$userName) || strlen($userName) > 255) {
		$formatErr = "Wrong username format";
		goto end;
	}
	$psw = test_input($_POST['psw']);
	if (!preg_match('/^[a-z0-9A-Z\s]+$/',$psw) || strlen($psw) > 20) {
		$formatErr = "Wrong password format";
		goto end;
	}
	$psw = password_hash($psw,PASSWORD_BCRYPT);
	$psw = str_replace('"', "'",$psw);
	$email = test_input($_POST['email']);
	// check if e-mail address is well-formed
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$formatErr = "Wrong email format";
		goto end;
	}
	$phoneNumber = test_input($_POST['Phone_number']);
	if (!preg_match('/^[0-9]+$/',$phoneNumber) || strlen($phoneNumber) != 9) {
		$formatErr = "Wrong phone number format";
		goto end;
	}
	$address = test_input($_POST['Address']);
	if (!preg_match('/^[a-z0-9A-Z]+$/',$address) || strlen($address) > 30) {
		$formatErr = "Wrong address format";
		goto end;
	}
	$city = test_input($_POST['City']);
	if (!preg_match('/^[a-z0-9A-Z\s]+$/',$city) || strlen($city) > 30) {
		$formatErr = "Wrong city format";
		goto end;
	}
	$zipCode = test_input($_POST['Zip_code']);
	if (!preg_match('/^[0-9]+$/',$zipCode) || strlen($zipCode) !== 4) {
		$formatErr = "Wrong zipcode format";
		goto end;
	}
	$bankAccount = test_input($_POST['Bank_account']);
	if (!preg_match('/^[0-9]+$/',$bankAccount) || strlen($bankAccount) !== 16) {
		$formatErr = "Wrong bank account format";
		goto end;
	}
	end:
	if ($formatErr !== 0){
		echo '<script language="javascript">';
		echo "alert('$formatErr')";
		echo '</script>';
		header('Refresh: 0; URL = /~tdiw-h1/user/register');
	}
	require_once("./model/userRegistration.php");
	if (!isUserRegistered($userName)){

		$params = array($name,$userName, $psw, $email,
			$phoneNumber, $address, $city, $zipCode, $bankAccount );
		register($params);
		echo '<script language="javascript">';
		echo 'alert("Registered successfully")';
		echo '</script>';
		header('Refresh: 0; URL = /~tdiw-h1/brands/view');
	}
	else{
		echo '<script language="javascript">';
		echo 'alert("User already registered")';
		echo '</script>';
		header('Refresh: 0; URL = /~tdiw-h1/user/register');
	}
	$conn = null;

	function test_input($data) {
  		$data = trim($data);
  		$data = stripslashes($data);
  		$data = htmlspecialchars($data);
  		return $data;
	}

 ?>
