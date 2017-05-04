<!DOCTYPE HTML>
<html>
  <head>

    <title>Login</title>
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
    	<div class = "login">
			<form action="/~tdiw-h1/user/checkLogin" method="post">
				<div class = "header">
            <h1 id ="title">Welcome Back!</h1>
            </div>
				<input class = "input" type="text" name="Username" required autocomplete="off" pattern="[a-zA-Z]+" placeholder="Enter username"/>
				<input class = "input" type="password" name="psw" required autocomplete="off" pattern="[a-zA-Z0-9]+" placeholder="Enter password"/>
				<input id = "login_button" type="submit" value="Login">
			</form>
		</div>
    </body>
</html>
