<!DOCTYPE HTML>
<html>
  <head>

    <title>Register</title>
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
   <div class = "register">
     <form class="register" action="/~tdiw-h1/user/registration" method="post">
         <div class = "header">
         <h1 id ="title">Register</h1>
         </div>
         <!-- Només accepta lletres i espai -->
         <div class = "input">
         <label for="Name"> Name: <input name="Name" class = "input" type="text" id="Name"  maxlength="40" pattern="[a-z0-9A-Z]+[a-z0-9A-Z ]+" placeholder="name" required/></label>
         </div>
         <!-- Només accepta lletres -->
         <div class = "input">
         <label for="Username"> Username:<input name="Username" class = "input" type="text" id="Username" maxlength="20" pattern="[a-zA-Z0-9]+" placeholder="username" required/></label>
         </div>
         <!-- Només accepta lletres i números -->
         <div class = "input">
         <label for="psw"> Password: <input name="psw" class = "input" type="password" id="psw" maxlength="20" pattern="[a-zA-Z0-9]+" placeholder="password" required /></label>
         </div>
         <!-- Només accepta lletres numeros i ha de ser aaaaaa@aaaa.aaa -->
         <div class = "input">
         <label for="email">Email: <input name="email" class = "input" type="email" id="email"
         pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" maxlength="30" placeholder="Enter email" required/></label>
         </div>

         <!-- Només accepta numeros i la mida == 9 -->
         <div class = "input">
         <label for="Phone_number"> Phone number: <input name="Phone_number" class = "input" type="text" id="Phone_number" minlength="9" maxlength="9"  pattern="[0-9]+" placeholder="phone number" required/></label>
         </div>
         <!-- Només accepta lletres numeros i mida (1-30) -->
         <div class = "input">
         <label for="Address"> Address: <input name="Address" class = "input" type="text" id="Address" minlength="1" maxlength="30"  pattern="[a-z0-9A-Z]+" placeholder="address" required/></label>
         </div>
         <!-- Només accepta lletres i espais mida (1-30) -->
         <div class = "input">
         <label for="City"> City: <input name="City" class = "input" type="text" id="City"  minlength="1" maxlength="30" pattern="[a-zA-Z0-9 ]+" placeholder="city" required/></label>
         </div>
         <!-- Només accepta numeros i la mida ==4 -->
         <div class = "input">
         <label for="Zip_code"> Zip code: <input name="Zip_code" class = "input" type="text" id="Zip_code"  minlength="4" maxlength="4" pattern="[0-9]+" placeholder="zip code" required/></label>
         </div>
         <!-- Només accepta numeros i la mida ==16 -->
         <div class = "input">
         <label for="Bank_account"> Bank account: <input name="Bank_account" class = "input" type="text" id="Bank_account"  minlength="16" maxlength="16" pattern="[0-9]+" placeholder="bank account" required/></label>
         </div>
         <div class = "input">
         <input  id = "register_button" type="submit" value="Register"/>
         </div>
     </form>
   </div>
   </body>
</html>
