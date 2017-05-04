<!DOCTYPE HTML>
<html>
  <head>

    <title>Contact</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="/~tdiw-h1/css/main.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="/~tdiw-h1/resources/functions.js"></script>

  </head>
<?php
  // controller that prints the nav and buttons
    require_once './controller/menu.php';
  ?>
  <body>
  <div class = "register">
        <form class="register" action="/~tdiw-h1/user/contact" method="post">
            <div class = "header">
            <h1 id ="title">Contact us</h1>
            </div>
            <!-- Només accepta lletres i espais, mida max 40 -->
            <div class = "input">
            <label for="Name"> Name: <input id="Name" class = "input" type="text" name="namec" maxlength="40" pattern="[a-zA-Z]+[a-zA-Z ]+" placeholder="name" required/></label>
            </div>
            <!-- Només accepta lletres numeros i ha de ser aaaaaa@aaaa.aaa, mida max 30 -->
            <div class = "input">
            <label for="emailc">Email: <input id="emailc" class = "input" type="email" name="emailc"
            pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" maxlength="30" placeholder="Enter email" required/></label>
            </div>
            <div class = "input">
            <label>Details:  <textarea class="input" name="details" rows="8" cols="70"></textarea></label>
            </div>
            <div class = "input">
            <input  id = "contact_button" type="submit" value="Send"/>
            </div>
        </form>
    </div>
</body>
</html>
