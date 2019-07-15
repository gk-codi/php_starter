Sliders table
<a href="<?php echo WEBSITE_URL .'/add_user.php'?>">Add user</a>
<table class="steelBlueCols">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Image Src</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th>Action</th>
    </tr>
	<?php
	foreach ( $sliders as $slider ) {
		?>
		<tr>
               <th><?php echo $slider['id']; ?></th>
               <th><?php echo $slider['title']; ?></th>
               <th><?php echo $slider['image_src']; ?></th>
               <th><?php echo $slider['created_at']; ?></th>
               <th><?php echo $slider['updated_at']; ?></th>
               <th>
                   <a href="<?php echo WEBSITE_URL; ?>/edit_user.php?id=<?php echo $slider['id']; ?>">Edit</a><br>
                   <form action="<?php echo WEBSITE_URL; ?>/delete_user.php?id=<?php echo $slider['id']?>" method="post">
                       <input type="hidden" name="form_type" value="delete_user">
                       <input type="submit" value="Delete">
                   </form>
               </th>
           </tr>
		<?php
	}
	?>
</table>
