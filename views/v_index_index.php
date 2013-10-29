
	<div class='header'>

		&nbsp; Welcome to <?=APP_NAME?><?php if($user) echo ', '.$user->first_name; ?>
		<br>		
		&nbsp; Enjoy your time!
		
	<br><br>
	</div>

	<div class = 'body'>
		<div class='center'>
			<div>&nbsp; LOG IN</div>
			<form method='POST' action='users/p_login' class='form-standard'>
				
				email<br>
			<input type='text' name='email'><br>
				password<br>
			<input type='password' name='password'><br><br>
			<input type='submit' value='log in'><br>
			</form>
		</div>
	</div>

	<div class = 'footer'>
		<div>
			&nbsp; Sign up is free!!
			<form action = 'users/signup' class = 'form-standard'>
				<input type = 'submit' value = 'sign up'>
			</form>
		</div>
		<div> +1 feature:<br>
			  +1 feature:
		</div>
	 
	<br><br>	
	</div>


