<!-- This provides the interface for the user to update the posts -->
<div class = 'header'>update</div>
<div class = 'center'>
	<form method='POST' action="/posts/p_update/<?=$post_id?>" class="form-standard">
	    <label for='content'>Update:</label><br>
	    <textarea name='content' id='content'></textarea><br><br>
	    <input type='submit' value='Update'>
	</form> 
</div>
