
	<div class='title'>

		<h1> Wwlcome to <?=APP_NAME?><?php if($user) echo ', '.$user->first_name; ?></h1>
		<?php echo "hello"; ?>
		Sign up is free!!
		<div>
			<form action = 'users/signup'>
				<input type = 'submit' value = 'sign up'>
			</form>
		</div>
	<br><br>
	</div>
	<div class = 'body'>
	
		<div>
			This is sign in part.
			<form>
			<input type='text'><br>
			<input type='text'><br>
			<input type='submit'>
			</form>
		</div>				
	</div>
	<div class = 'footer'>
	 Enjoy your time!
	<br><br>	
	</div>


