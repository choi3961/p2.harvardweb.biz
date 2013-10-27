<div class = 'center'>
<?php echo "hello $user->first_name"; ?><br><br>
<form method='POST' action='/posts/p_add' class='form-standard'>

    <label for='content'>New Post:</label><br>
    <textarea name='content' id='content'></textarea>

    <br><br>
    <input type='submit' value='New post'>

</form> 
</div>
