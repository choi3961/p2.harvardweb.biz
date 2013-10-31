<div class = 'header'>POSTS</div>
    <?php foreach($posts as $post): ?>
<div class = 'article'>
<article>
    <div class = 'article-header'><h1>You posted:</h1></div>

    <div class = 'article-content'><p><?=$post['content']?></p></div>

    <div class = 'article-time'><time datetime="<?=Time::display($post['created'],'Y-m-d G:i')?>">
        <?=Time::display($post['created'])?>
    </time></div>

</article>
</div>
<div class = 'article-control'>
	<div><form action = "/posts/update/<?=$post['post_id']?>" method = "post" >
			<input type = 'submit' value = 'update'>
		</form>
	</div>
	<div><form action = "/posts/remove/<?=$post['post_id']?>" method = "post" >
			<input type = 'submit' value = 'remove'>
		</form>
	</div>
	
</div>

<?php endforeach; ?>



