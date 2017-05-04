<?php

	$namec = $emailc = $details = "";

	$namec = test_input($_POST['namec']);
	$emailc = test_input($_POST['emailc']);
	$details = test_input($_POST['details']);

	require_once("./model/userContact.php");
	$params = array($namec,$emailc,$details);
	contact($params);

	function test_input($data) {
  		$data = trim($data);
  		$data = stripslashes($data);
  		$data = htmlspecialchars($data);
  		return $data;
	}
 ?>
