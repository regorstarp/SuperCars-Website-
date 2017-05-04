<?php
	echo "<h2>Cart Summary</h2>";
	echo "<ul id='cart_summary'>";
	foreach ($cart_items as $product) {
		echo "<li>Name: $product[0] Price: $product[1]€</li>";
	}
	echo "<li>Total: $cart_price €</li>";
	echo "</ul>";
	echo "<div class = 'checkCredentials'>
		<form action='/~tdiw-h1/user/checkCredentials' method='post'>
			<div class = 'header'>
        <h1 id ='title'>Autenticate to confirm the purchase</h1>
        </div>
			<input class = 'input' type='text' name='Username' required autocomplete='off' pattern='[a-zA-Z]+' placeholder='Enter username'/>
			<input class = 'input type='password' name='psw' required autocomplete='off' pattern='[a-zA-Z0-9]+' placeholder='Enter password'/>
			<input id = 'login_button' type='submit' value='Purchase'>
			<button id = 'cancel_button' type='submit' onclick = 'history.go(0)' value='Purchase'>Cancel</button>
		</form>"
 ?>
