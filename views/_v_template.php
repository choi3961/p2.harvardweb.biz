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
        <a href="">USERS =|</a>
        <a href='/users/logout'>Logout | </a>
        <a href='/users/profile'>Profile | </a>
        <a href='/users/signup'>Sign up | </a>
        <a href='/users/login'>Log in | </a>


        <a href="">POSTS =|</a>
        <a href="/posts/index">index |</a>
        <a href="/posts/users">users |</a>
        <a href="/posts/add">add |</a>
        <a href="/posts/follow">follow |</a>
        <a href="/posts/unfollow">unfollow |</a>
        <a href=""></a>
        
        <div class='greetings'>
            <?php if($user) echo "hello $user->first_name"; ?>
        </div>
    </div>
 
<div class = "container">
    <div class = 'trade-mark'>
         SQUAWK
    </div>
    
  	<?php if(isset($content)) echo $content; ?>

	<?php if(isset($client_files_body)) echo $client_files_body; ?>
</div>
    
</body>
</html>