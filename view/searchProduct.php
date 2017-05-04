<!DOCTYPE HTML>
<html>
  <head>

    <title>Search</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="/~tdiw-h1/css/main.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="/~tdiw-h1/resources/functions.js"></script>

  </head>
  <body>
<?php
   require_once './controller/menu.php';
      echo "<ul id='results'>";
      foreach ($results as $result) {
      $product_id = $result['product_id'];
      $product_name = $result['product_name'];
      echo "<li><a href= '/~tdiw-h1/product/view/$product_id'>$product_name</a></li>";
      }
      echo "</ul>";
 ?>
</body>
</html>
