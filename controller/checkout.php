<?php
	if (!isset($_SESSION['username'])){
		header('Refresh: 0; URL = /~tdiw-h1/cart/view');
	}
	require_once './model/checkout.php';
	purchase($_SESSION['cart_price'],$_SESSION['username']);
	unset($_SESSION['cart']);
	unset($_SESSION['cart_price']);
	header('Refresh: 0; URL = /~tdiw-h1/purchase/view');
 ?>
