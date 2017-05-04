<?php
	require_once './model/purchase.php';
	if (isset($_SESSION['username'])){
		$purchases = array();
		$purchases = getPurchases($_SESSION['username']);
		if ($purchases == false){
			$purchases = "No purchases yet";
		}
	}
	else{
		$purchases = "Need to login to see purchases";
	}
	require_once './view/purchase.php';
 ?>
