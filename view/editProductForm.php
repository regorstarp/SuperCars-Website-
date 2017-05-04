<!DOCTYPE HTML>
<html>
  <head>

    <title>Edit Product</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="/~tdiw-h1/css/main.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="/~tdiw-h1/resources/functions.js"></script>

  </head>

<?php
	require_once './controller/menu.php';
 ?>
 <body>

<form action='/~tdiw-h1/product/update' method='post'>
<div class = 'header'>
<h1 id ='title'>Update product</h1>
</div>

<div class = 'input'>
<label for='product_name'> Name: <input name='product_name' class = 'input' type='text' id='product_name'  maxlength='40' pattern='[a-z0-9A-Z]+[a-z0-9A-Z ]+' placeholder='product_name' required/></label>
</div>
<input type="hidden" name="product_id" value="<?php echo $product_id ?>">

<label>Category: </label>
<select name = 'category_id'>
<?php
foreach ($brands as $brand) {
    echo "<option name='Category_id' value='$brand[category_id]'>$brand[category_name]</option>";
}
?>
</select>
<div class = 'input'>

<label for='brief_description'> Brief description: <input name='brief_description' class = 'input' type='text' id='brief_description'  maxlength='40' pattern='[a-z0-9A-Z]+[a-z0-9A-Z ]+' placeholder='Brief description' required/></label>
</div>

<div class = 'input'>
<label for='full_description'> Full description: <input name='full_description' class = 'input' type='text' id='full_description'  maxlength='40' pattern='[a-z0-9A-Z]+[a-z0-9A-Z ]+' placeholder='Full description' required/></label>
</div>

<div class = 'input'>
<label for='price_tag'> Price: <input name='price_tag' class = 'input' type='text' id='price_tag'  maxlength='40' pattern='[0-9]+' placeholder='Price tag' required/></label>
</div>
<input  id = 'update_product' type='submit' value='update_product'/>
</form>
</body>
</html>
