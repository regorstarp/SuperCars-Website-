<?php
   $cart_items = array();
   $cart_price = 0;
   $cart_items = $_SESSION['cart'];
   $cart_price = $_SESSION['cart_price'];
   require "./view/confirmPurchase.php";
 ?>
