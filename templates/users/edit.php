Change
<form action="edit_user.php?id=<?php echo $user->id?>" method="post">
    <div class="input-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="<?php echo $user->name; ?>">
    </div>
    <div class="input-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" value="<?php echo $user->password; ?>">
    </div>
     <input type="hidden" name="form_type" value="update_user">
    <input type="hidden" name="user_id" value="<?php echo $user->id; ?>">
    <input type="submit" value="Update">
</form>
