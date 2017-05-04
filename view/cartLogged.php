<!DOCTYPE HTML>
<html>
  <head>

    <title>Cart</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="/~tdiw-h1/css/main.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="/~tdiw-h1/resources/functions.js"></script>

  </head>
  <?php require_once './controller/menu.php'; ?>
  <body>
  <ul class ='cart_products' id ='cart_products'>
    <?php
    foreach($cart as $product){
        echo "<li id='cart_product_$product[2]'>$product[0] $product[1]€ <button type='submit' id='del_from_cart' onclick='delFromCart($product[2])'>Delete </button> </li>";
    }
     ?>

    <li id='total_price'>Total: <?php echo $cart_price ?> €</li>
    <li><button id="checkout" type='submit' onclick='checkCredentials()'>Checkout</button></li>
    </ul>
    </body>
    </html>
