<?php
if(!isset($_SESSION['cart'])){
    $_SESSION['cart'] = array();
    $_SESSION['cart_price'] = 0;
}
switch ($action) {
	case 'add':
		// get the product info
		 // add new item on array
		$cart_item=array($name,$price,$id);
		$_SESSION['cart'][$id]=$cart_item;
		$_SESSION['cart_price'] += $price;
		break;
	case 'del':
		$product = $_SESSION['cart'][$id];
		$price = $product[1];
		unset($_SESSION['cart'][$id]);
		$_SESSION['cart_price'] -= $price;
		break;
	case 'getSize':
		break;
	default:
		# code...
		break;
}
if (count($_SESSION['cart']) == 0){
	$_SESSION['cart_price'] = 0;
}
echo count($_SESSION['cart']);
echo "||";
echo $_SESSION['cart_price'];

?>
