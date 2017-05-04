<!DOCTYPE HTML>
<html>
  <head>

    <title>Profile</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="/~tdiw-h1/css/main.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="/~tdiw-h1/resources/functions.js"></script>

  </head>
  <body>
<?php
	require_once './controller/menu.php';
   ?>
	<ul id='user_info'>User info;
	<li>Name: <?php echo $userInfo['name']?></li>
	<li>Username: <?php echo $userInfo['username']?></li>
	<li>Email: <?php echo $userInfo['email']?></li>
	<li>Phone number: <?php echo $userInfo['phone_number']?></li>
	<li>Address: <?php echo $userInfo['address']?></li>
	<li>City: <?php echo $userInfo['city']?></li>
	<li>Postal code: <?php echo $userInfo['postal_code']?></li>
	<li>Bank account: <?php echo $userInfo['bank_account']?></li>
	<li><button type='submit' onclick='showEditProfileForm()'>Edit profile</button></li></ul>
 </body>
 </html>
