<!DOCTYPE html>
<!-- This the basic template for project2 -->
<html>
    <head>
    	<title><?php if(isset($title)) echo $title; ?></title>
    	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
        <link rel="stylesheet" type="text/css" href="/css/main.css">					
    	<!-- Controller Specific JS/CSS -->
    	<?php if(isset($client_files_head)) echo $client_files_head; ?>
    </head>
    <body>	
        <!-- This is the interface for the pages the users use easily -->
    	<div id='menu'>
            <a href='/'>Home  </a> |
            <a href = '/posts/mypage/'> myposts </a> |
            <!-- Menu for users who are logged in -->
            <?php if($user): ?>
                <a href='/users/logout'>Logout </a> |
                <a href='/users/profile'>Profile  </a> |
            <!-- Menu options for users who are not logged in -->
            <?php else: ?>
                <a href='/users/signup'>Sign up </a> | 
                <a href='/users/login'>Log in </a> |
            <?php endif; ?>
            <a href="/posts/index">index </a> |
            <a href="/posts/users">users </a> |
            <a href="/posts/add">addPost </a>|
            <div class='greetings'>
                <?php if($user) echo "hello $user->first_name"; ?>
            </div>
        </div>
        <!-- contains whole bunch of contents -->
        <div class = "container">
            <!--Trade mark of the application. -->
            <div class = 'trade-mark'>
                 <a href ='/' class = 'trade-mark'>SQUAWK</a>
            </div>

            <!-- displays the contents of the page -->
          	<?php if(isset($content)) echo $content; ?>
        	<?php if(isset($client_files_body)) echo $client_files_body; ?>

            <!-- footer part -->
            <div class = 'footer'>
            </div>
        </div>
    </body>
</html>