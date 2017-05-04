<?php
	if (isset($_SESSION['username']) and strcmp($_SESSION['username'],"admin") == 0){
		require_once './view/headerAdmin.php';
	}
	else if (isset($_SESSION['username'])){
	 	require_once './view/headerLogged.php';
	}else{
	 	require_once './view/headerNotLogged.php';
	}
	if (isset($_SESSION['cart']) and count($_SESSION['cart'] > 0)){
		echo "<script type='text/javascript'>";
    	echo "loadCartSize();";
    	echo "</script>";
	}


?>
