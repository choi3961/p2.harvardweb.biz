<!-- This is sign up page to be displayed -->
<div class = 'header'> sign up </div>
<div class='center'>
    <!-- sign up interface page -->
    <form method='POST' action='/users/p_signup' class='form-standard'>
        First Name <span class = 'required'>*</span><br>
        <input type='text' name='first_name' required><br><br>
        Last Name <span class = 'required'>*</span><br>
        <input type='text' name='last_name' required><br><br>
        Email <span class = 'required'>*</span><br>
        <input type='text' name='email' required><br><br>
        Password <span class = 'required'>*</span><br>
        <input type='password' name='password' required><br><br>

        <?php if($error == 'error'): ?>
        <div class='error'>
            Sign up failed. Please fill out all the fields.
        </div><br>
        <?php endif; ?>
        <?php if($error == 'failed'): ?>
        <div class='error'>
            Sign up failed. Your email is already registered.
        </div><br>
        <?php endif; ?>
        
        <input type='submit' value = 'submit'>
    </form>
</div>