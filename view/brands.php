<!DOCTYPE HTML>
<html>
  <head>

    <title>Brands</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="/~tdiw-h1/css/main.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="/~tdiw-h1/resources/functions.js"></script>

  </head>
<?php
  $pageTitle = "Brands";
  require_once './controller/menu.php';
   ?>
<body>
<section>
  <div class = "brands" id ="brands">

  <?php
  for ($i=0; $i < count($brands); $i++) {
    $brand = $brands[$i];
    $brand_id = $brand['category_id'];
      echo "<div class = 'brand'><a id = 'brand_link' href='javascript:loadProducts($brand_id)'><img id='logo' src ='/~tdiw-h1/view/images/".$brand['image']."'/></a></div>";
    }
  ?>
    </div>
    </section>
  </body>
  </html>
