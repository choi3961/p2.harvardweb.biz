<!-- This is sign up page to be displayed -->
<div class = 'header'> sign up </div>
<div class='center'>
    <form method='POST' action='/users/p_signup' class='form-standard'>
        First Name <span class = 'required'>*</span><br>
        <input type='text' name='first_name'><br><br>
        Last Name <span class = 'required'>*</span><br>
        <input type='text' name='last_name'><br><br>
        Email <span class = 'required'>*</span><br>
        <input type='text' name='email'><br><br>
        Password <span class = 'required'>*</span><br>
        <input type='password' name='password'><br><br>

        <?php if(isset($error)): ?>
        <div class='error'>
            Sign up failed. Please fill out all the fields.
        </div><br>
        <?php endif; ?>
        
        <input type='submit' value = 'submit'>
    </form>
</div>