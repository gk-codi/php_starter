Add user
<form action="add_user.php" method="post">
    <div class="input-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="">
    </div>
	<div class="input-group">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" value="">
    </div>
    <div class="input-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" value="">
    </div>
	
	<input type="hidden" name="form_type" value="create_user">
    <input type="submit" value="Update">
</form>
