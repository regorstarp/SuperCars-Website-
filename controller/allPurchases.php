<?php
	$pageTitle = 'All Purchases';
	require_once './model/allPurchases.php';
	if (isset($_SESSION['username']) and strcmp($_SESSION['username'],"admin") == 0){
		$purchases = array();
		$purchases = getAllPurchases();
		if ($purchases == false){
			$purchases = "No purchases yet";
		}
		require_once './view/allPurchases.php';
	}
	else{
		echo "UNAUTHORISED";
	}

 ?>
