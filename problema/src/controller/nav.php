<?php 
	if (!isset($_SESSION['user'])){
		session_start();
	}
	if(!isset($_SESSION['user'])) {
		require("./view/notLoggedUser.php");
	}
	else{
		$user = $_SESSION['user'];
		require("./view/loggedUser.php");
	}
 ?>