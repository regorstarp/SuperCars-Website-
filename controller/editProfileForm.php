<?php
	if(!isset($_SESSION))
	{
    	session_start();
	}
	$pageTitle = 'Edit Profile';
	require_once './model/profile.php';
	$userInfo = array();
	if (isset($_SESSION['username'])){
		$username = $_SESSION['username'];
		$userInfo = getUserInfo($username);
	}
	require_once './view/editProfileForm.php';

 ?>
