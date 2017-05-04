<?php
	echo "<div class = 'edit_profile_div'>
        <form class='edit_profile_form' action='/~tdiw-h1/user/updateProfile' method='post'>
            <div class = 'header'>
            <h1 id ='title'>Register</h1>
            </div>
            <!-- Només accepta lletres i espai -->
            <div class = 'input'>
            <label for='Name'> Name: <input value=$userInfo[name] name='Name' class = 'input' type='text' id='Name'  maxlength='40' pattern='[a-z0-9A-Z]+[a-z0-9A-Z ]+' placeholder='name' required/></label>
            </div>
            <!-- Només accepta lletres i números -->
            <div class = 'input'>
            <label for='psw'> Password: <input name='psw' class='input' type='password' id='psw' maxlength='20'pattern='[a-zA-Z0-9]+' placeholder='password' required /></label>
            </div>
            <!-- Només accepta numeros i la mida == 9 -->
            <div class = 'input'>
            <label> Phone number: <input value=$userInfo[phone_number] name='Phone_number' class = 'input' type='text' id='Phone_number' minlength='9' maxlength='9'  pattern='[0-9]+' placeholder='phone number' required/></label>
            </div>
            <!-- Només accepta lletres numeros i mida (1-30) -->
            <div class = 'input'>
            <label> Address: <input value=$userInfo[address] name='Address' class = 'input' type='text' id='Address' minlength='1' maxlength='30'  pattern='[a-zA-Z0-9]+' placeholder='address' required/></label>
            </div>
            <!-- Només accepta lletres i espais mida (1-30) -->
            <div class = 'input'>
            <label> City: <input value=$userInfo[city] name='City' class = 'input' type='text' id='City'  minlength='1' maxlength='30' pattern='[a-zA-Z]+[a-zA-Z ]+' placeholder='city' required/></label>
            </div>
            <!-- Només accepta numeros i la mida ==4 -->
            <div class = 'input'>
            <label> Zip code: <input value=$userInfo[postal_code] name='Zip_code' class = 'input' type='text' id='Zip_code'  minlength='4' maxlength='4' pattern='[0-9]+' placeholder='zip code' required/></label>
            </div>
            <!-- Només accepta numeros i la mida ==16 -->
            <div class = 'input'>
            <label> Bank account: <input value=$userInfo[bank_account] name='Bank_account' class = 'input' type='text' id='Bank_account'  minlength='16' maxlength='16' pattern='[0-9]+' placeholder='bank account' required/></label>
            </div>
            <div class = 'input'>
            <input  id = 'edit_profile' type='submit' value='edit_profile'/>
            </div>
        </form>
    </div>"
 ?>
