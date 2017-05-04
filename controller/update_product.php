<?php

   if (isset($_SESSION['username']) and strcmp($_SESSION['username'],"admin") == 0){
      $product_name = $_REQUEST['product_name'];
      $category_id = $_REQUEST['category_id'];
      $brief_description = $_REQUEST['brief_description'];
      $full_description = $_REQUEST['full_description'];
      $price_tag = $_REQUEST['price_tag'];
      $product_id = $_REQUEST['product_id'];
      require_once "./model/update_product.php";
      $params = array($product_name, $category_id, $brief_description, $full_description, $price_tag, $product_id);
      $result = updateProduct($params);
      if ($result === false){
            echo "ERROR updating the product";
      }else{
        header('Refresh: 0; URL = /~tdiw-h1/brands/view');
      }
   }else{
      echo "UNAUTHORISED";
   }
 ?>
