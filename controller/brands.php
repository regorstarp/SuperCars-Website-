<?php
	$pageTitle = 'Brands';
	require_once("./model/brands.php");
	/*Cridem la funcio de model per obtenir dades de la BD per la vista*/
	$result = getBrands();
	$brands = array();
	/* Adaptem les dades com com les necessita la vista*/
	if (!empty($result)) {
    // output data of each row
		while ($row = $result->fetch(PDO::FETCH_ASSOC)){
			$brands[] = $row;
		}
	} else {
    echo "0 results";
	}
	require_once("./view/brands.php");
?>
