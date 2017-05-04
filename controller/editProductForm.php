<?php
   if (isset($_SESSION['username']) and strcmp($_SESSION['username'],"admin") == 0){
      require_once './model/brands.php';
		$brands = array();
		$brands = getBrands();
      require_once "./view/editProductForm.php";
   }else{
      echo "UNAUTHORISED";
   }
 ?>
