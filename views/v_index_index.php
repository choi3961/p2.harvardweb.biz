<!-- This is the landing page first displayed for the application -->
	<div class='header'>
		Welcome to <?=APP_NAME?><?php if($user) echo ", $user->first_name"; ?>
		<br>		
		Enjoy your time!
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
			Sign up is free!!
			<form action = 'users/signup' class = 'form-standard'>
				<input type = 'submit' value = 'sign up'>
			</form>
		</div>
		<div class = 'footer-lefter'> +1 features: delete, update, mail
		</div>	
	</div>


