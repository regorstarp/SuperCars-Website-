<?php
$pageTitle = 'Cart';
if( (isset($_SESSION['cart'])) and (count($_SESSION['cart'])>0)){
	$cart = array();
	$cart = $_SESSION['cart'];
	$cart_price = $_SESSION['cart_price'];
	if (isset($_SESSION['username'])){
		require_once "./view/cartLogged.php";
	}else{
		require_once "./view/cartNotLogged.php";
	}
}else{
	require_once "./view/emptyCart.php";
}
?>
