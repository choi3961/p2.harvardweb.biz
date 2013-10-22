
	<div class='header'>

		Welcome to <?=APP_NAME?><?php if($user) echo ', '.$user->first_name; ?>
				
		<br>Enjoy your time!
		
	<br><br>
	</div>
	<div class = 'body'>
	
		<div class='center'>
			<br>LOG IN
			<form method='POST' action='users/p_login' class='form-standard'>
				email<br>
			<input type='text' name='email'><br>
				password<br>
			<input type='text' name='password'><br>
			<input type='submit' value='log in'>
			</form>
		</div>				
	</div>
	<div class = 'footer'>
		<div class='cen-cen'>
			Sign up is free!!
			<form action = 'users/signup'>
				<input type = 'submit' value = 'sign up'>
			</form>
		</div>
	 
	<br><br>	
	</div>


