<div class = 'header'> users </div>

<table class = 'table table-striped'>
    <thead>
            <tr>
                <th>Name</th>
                <th>Name</th>
                <th>followorUnfollow</th>
            </tr>
    </thead>
    <tbody>
    <?php foreach($users as $user): ?>
        <tr>
            <td><?=$user['first_name']?></td><!-- Print this user's name -->
            <td><?=$user['last_name']?></td>
            <!-- If there exists a connection with this user, show a unfollow link -->
            <td><?php if(isset($connections[$user['user_id']])): ?>
                <a href='/posts/unfollow/<?=$user['user_id']?>'>Unfollow</a>

            <!-- Otherwise, show the follow link -->
            <?php else: ?>
                <a href='/posts/follow/<?=$user['user_id']?>'>Follow</a>
            <?php endif; ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>


