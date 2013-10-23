<!DOCTYPE html>
<html>
<head>
	<title><?php if(isset($title)) echo $title; ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
    <link rel="stylesheet" type="text/css" href="/css/main.css">
					
	<!-- Controller Specific JS/CSS -->
	<?php if(isset($client_files_head)) echo $client_files_head; ?>
	
</head>

<body>	
	<div id='menu'>
        <a href='/'>Home | </a>

        <!-- Menu for users who are logged in -->
        <?php if($user): ?>

            <a href='/users/logout'>Logout | </a>
            <a href='/users/profile'>Profile | </a>
            
        <!-- Menu options for users who are not logged in -->
        <?php else: ?>

            <a href='/users/signup'>Sign up | </a>
            <a href='/users/login'>Log in | </a>

        <?php endif; ?>

        <a href="/posts/index">posts |</a>
        <a href="">posts-following |</a>
        <a href="/posts/add">add-posts |</a>
        <a href=""></a>
        <a href=""></a>
        <a href=""></a>

        <div class='greetings'>
            <?php if($user) echo 'hello'; ?>
        </div>
    </div>
 
<div class = "container">
    
  	<?php if(isset($content)) echo $content; ?>

	<?php if(isset($client_files_body)) echo $client_files_body; ?>
</div>
    
</body>
</html>