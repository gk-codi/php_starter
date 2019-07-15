<?php
require_once './database/connect.php';

if ( isset( $_POST['form_type'] ) && $_POST['form_type'] === 'delete_user' && isset( $_GET['id'] ) ) {
	$delete_query = 'DELETE FROM Users WHERE id = :id';
	$stmt         = $db->prepare( $delete_query );
	$stmt->bindParam( ':id', $_GET['id'] );
	
	$stmt->execute();
	
	// Redirect to the previous page
	header('Location: ' . $_SERVER['HTTP_REFERER']);
	
} else {
	// Redirect to home page if the required parameter aren't passed
	header( 'Location: /' );
}
