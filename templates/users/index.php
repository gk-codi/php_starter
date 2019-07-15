Users table
<a href="<?php echo WEBSITE_URL .'/add_user.php'?>">Add user</a>
<table class="steelBlueCols">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th>Action</th>
    </tr>
    <?php
    foreach ( $users as $user ) {
        ?>
        <tr>
               <th><?php echo $user['id']; ?></th>
               <th><?php echo $user['name']; ?></th>
               <th><?php echo $user['email']; ?></th>
               <th><?php echo $user['created_at']; ?></th>
               <th>
                   <a href="<?php echo WEBSITE_URL; ?>/edit_user.php?id=<?php echo $user['id']; ?>">Edit</a><br>
                   <form action="<?php echo WEBSITE_URL; ?>/delete_user.php?id=<?php echo $user['id']?>" method="post">
                       <input type="hidden" name="form_type" value="delete_user">
                       <input type="submit" value="Delete">
                   </form>
               </th>
           </tr>
        <?php
    }
    ?>
</table>
