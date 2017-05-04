<?php
	if (isset($_REQUEST['text'])){
		function test_input($data) {
		  		$data = trim($data);
		  		$data = stripslashes($data);
		  		$data = htmlspecialchars($data);
		  		return $data;
			}

		$name = test_input($_REQUEST['text']);
		require_once("./model/searchProduct.php");
		$results = searchProduct($name);
		if (!$results){
			echo "no results";
		}
		else{
			require_once("./view/searchProduct.php");
		}
	}else{
		header("location:javascript://history.go(-1)");
	}

 ?>
