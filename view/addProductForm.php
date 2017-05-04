<!DOCTYPE HTML>
<html>
  <head>

    <title>Add Product</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="/~tdiw-h1/css/main.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="/~tdiw-h1/resources/functions.js"></script>

  </head>
   <?php
   require_once './controller/menu.php';
   ?>
   <div class = 'add_product_form'>
      <form action='/~tdiw-h1/product/addProduct' method='post' enctype='multipart/form-data'>
         <div class = 'header'>
         <h1 id ='title'>Add product</h1>
         </div>

         <div class = 'input'>
         <label for='Name'> Name: <input name='Name' class = 'input' type='text' id='Name'  maxlength='40' pattern='[a-z0-9A-Z]+[a-z0-9A-Z ]+' placeholder='name' required/></label>
         </div>

         <label>Category: </label>
         <select name = 'Category_id'>
         <?php
         foreach ($brands as $brand) {
             echo "<option name='Category_id' value='$brand[category_id]'>$brand[category_name]</option>";
         }
          ?>
         </select>
         <div class = 'input'>

         <label for='Brief description'> Brief description: <input name='Brief_description' class = 'input' type='text' id='Brief_description'  maxlength='40' pattern='[a-z0-9A-Z]+[a-z0-9A-Z ]+' placeholder='Brief description' required/></label>
         </div>

         <div class = 'input'>
         <label for='Full description'> Full description: <input name='Full_description' class = 'input' type='text' id='Full_description'  maxlength='40' pattern='[a-z0-9A-Z]+[a-z0-9A-Z ]+' placeholder='Full description' required/></label>
         </div>

         <div class = 'input'>
         <label for='Price'> Price: <input name='Price' class = 'input' type='text' id='Price'  maxlength='40' pattern='[0-9]+' placeholder='Price' required/></label>
         </div>

         Select image to upload:
         <input type='file' name='fileToUpload' id='fileToUpload'>

         <input  id = 'add_product_submit' type='submit' value='add_product_submit'/>
         </div>
     </form>
   </body>
   </html>
