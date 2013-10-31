<div class = 'header'>update</div>

<div class = 'center'>
<?php echo "hello $user->first_name"; ?><br><br>
<form method='POST' action="/posts/p_update/<?=$post_id?>" class="form-standard">

    <label for='content'>Update:</label><br>
    <textarea name='content' id='content'></textarea>

    <br><br>
    <input type='submit' value='Update'>

</form> 


   

</div>
