<?php session_start();?>
<!DOCTYPE html>
<html>
  <head>
    <title> UAB/Enginyeria </title> 
    <meta charset="utf-8"/> 
    <link rel="stylesheet" type="text/css" href="css/uab.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/functions.js"></script>
  </head> 
  <body> 
  
<?php

}



require("header.php");
?>
<section id="main">
<?php 
  if (isset($msg)){
  echo $msg;
}
?>
</section>
 <?php require("footer.html"); ?>
  </body>
</html>


