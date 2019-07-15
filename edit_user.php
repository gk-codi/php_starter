<?php
require_once './middleware/isAuthenticated.php';
require_once './database/connect.php';
if ( ! isset( $_GET['id'] ) ) {
	header( 'Location: /' );
}

if ( isset( $_POST['form_type'] ) && $_POST['form_type'] === 'update_user' ) {
	$user_id           = $_POST['user_id'];
	$user_name         = $_POST['name'];
	$user_password     = $_POST['password'];
	$updated_at        = date( 'Y-m-d H:i:s' );
	$user_update_query = 'UPDATE Users SET name = :user_name , password = :user_password , updated_at = :updated_at WHERE id = :user_id';
	$stmt              = $db->prepare( $user_update_query );
	$stmt->bindParam( ':user_id', $user_id );
	$stmt->bindParam( ':user_name', $user_name );
	$stmt->bindParam( ':user_password', $user_password );
	$stmt->bindParam( ':updated_at', $updated_at );
	$stmt->execute();
}
$user_query = 'SELECT * FROM Users WHERE id = :user_id';
$stmt       = $db->prepare( $user_query );
$stmt->bindParam( ':user_id', $_GET['id'] );
$stmt->execute();
$user = $stmt->fetchObject();

?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
             <meta name="viewport"
                   content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
                         <meta http-equiv="X-UA-Compatible" content="ie=edge">
             <title>Edit User</title>
      <link rel="stylesheet" type="text/css" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/styles.css">
</head>
<body>
<div class="layout">
    <div class="bar">
        <div class="user-card">
            <div class="user-image">
                <img src="./assets/images/user_image.png" alt="User image" />
            </div>
            <div class="user-info">
                <span>Gaby Karam</span>
            </div>
            
        </div>
    </div>
    <div class="side">
        <?php require_once './templates/nav.php' ?>
    </div>
    <div class="content">
        <?php require_once './templates/users/edit.php'; ?>
    </div>
</div>
</body>
</html>
