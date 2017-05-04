<!DOCTYPE HTML>
<html>
   <head>
      <title>All Purchases</title>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link rel="stylesheet" type="text/css" href="/~tdiw-h1/css/main.css">
      <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script type="text/javascript" src="/~tdiw-h1/resources/functions.js"></script>
   </head>
   <body>
      <?php
         require_once './controller/menu.php';
         echo "<h1>Purchases</h1><ul>";
         if (strcmp(gettype($purchases),"string") == 0){
         	echo "<li >$purchases</li>";
         }
         else {
         	foreach ($purchases as $purchase) {
         	echo "<li id='purchase'>Customer_id: $purchase[customer_id] | Date: $purchase[date] | Total: $purchase[total_price]€</li>";
         	}
         }
         echo "</ul>";
         ?>
   </body>
</html>
