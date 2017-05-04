<?php
	$pageTitle = 'Brands Detail';
	require_once("./model/brands_detail.php");
	/*Cridem la funcio de model per obtenir dades de la BD per la vista*/
	$result = getBrandDetail($brand_id);
	$products = array();
	if (!empty($result)) {
    // output data of each row
		while ($row = $result->fetch(PDO::FETCH_ASSOC)){
			$products[] = $row;
		}
	} else {
    echo "0 results";
	}
	require_once("./view/brands_detail.php");
?>
