<?php
	$pageTitle = 'Product';
	require_once "./model/product.php";
	$result = getProduct($product_id);
	if (!empty($result)) {
    // output data of each row
		while ($row = $result->fetch(PDO::FETCH_ASSOC)){
			$product = $row;
		}
	} else {
    echo "0 results";
	}
	if (isset($_SESSION['username']) and strcmp($_SESSION['username'],"admin") == 0){
		require_once "./view/productAdmin.php";
	}else{
		require_once "./view/product.php";
	}
 ?>
