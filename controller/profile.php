<?php
	if (!isset($_SESSION['username'])){
     echo "You need to be logged in to access your profile.";
	}
	else{
		$pageTitle = 'Profile';
		require_once './model/profile.php';
		$userInfo = array();
		$username = $_SESSION['username'];
		$userInfo = getUserInfo($username);
		require_once './view/profile.php';
	}
 ?>
