<?php
	$formatErr = false;
	$name = test_input($_POST['Name']);
	// nomes caracters i espais i mida com a maxim 40
	if (!preg_match("/^[a-zA-Z ]*$/",$name) || strlen($name) > 40) {
    	$formatErr = "Wrong name format";
    	goto end;
	}
	$psw = test_input($_POST['psw']);
	if (!preg_match("/^[a-zA-Z0-9 ]*$/",$psw) || strlen($psw) > 20) {
		$formatErr = "Wrong password format";
		goto end;
	}
	$psw = password_hash($psw,PASSWORD_BCRYPT);

	$phoneNumber = test_input($_POST['Phone_number']);
	if (!preg_match("/^[0-9]*$/",$phoneNumber) || strlen($phoneNumber) != 9) {
		$formatErr = "Wrong phone number format";
		goto end;
	}
	$address = test_input($_POST['Address']);
	if (!preg_match("/^[a-zA-Z0-9]*$/",$address) || strlen($address) > 30) {
		$formatErr = "Wrong address format";
		goto end;
	}
	$city = test_input($_POST['City']);
	if (!preg_match("/^[a-zA-Z ]*$/",$city) || strlen($city) > 30) {
		$formatErr = "Wrong city format";
		goto end;
	}
	$zipCode = test_input($_POST['Zip_code']);
	if (!preg_match("/^[0-9]*$/",$zipCode) || strlen($zipCode) != 4) {
		$formatErr = "Wrong zipcode format";
		goto end;
	}
	$bankAccount = test_input($_POST['Bank_account']);
	if (!preg_match("/^[0-9 ]*$/",$bankAccount) || strlen($bankAccount) != 16) {
		$formatErr = "Wrong bank account format";
		goto end;
	}
	end:
	if ($formatErr != false){
		echo '<script language="javascript">';
		echo "alert('$formatErr')";
		echo '</script>';
		header('Refresh: 0; URL = /~tdiw-h1/user/profile');
	}
	require_once("./model/editProfile.php");
	$username = $_SESSION['username'];
	$params = array($name, $psw,$phoneNumber, $address, $city, $zipCode, $bankAccount, $username);
	update_info($params);
	echo '<script language="javascript">';
	echo 'alert("Profile updated successfully")';
	echo '</script>';
	header('Refresh: 0; URL = /~tdiw-h1/user/profile');
	function test_input($data) {
  		$data = trim($data);
  		$data = stripslashes($data);
  		$data = htmlspecialchars($data);
  		return $data;
	}

 ?>
