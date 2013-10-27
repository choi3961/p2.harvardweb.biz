<div class = 'header'>POSTS</div>
    <?php foreach($posts as $post): ?>

<article>
    <div class = 'article-header'><h1><?=$post['first_name']?> <?=$post['last_name']?> posted:</h1></div>

    <div class = 'article-content'><p><?=$post['content']?></p></div>

    <div class = 'article-time'><time datetime="<?=Time::display($post['created'],'Y-m-d G:i')?>">
        <?=Time::display($post['created'])?>
    </time></div>

</article>

<?php endforeach; ?>



