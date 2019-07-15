<?php
session_start();
if ( ! isset( $_SESSION['user_id'] ) ) {
	// Redirect them to the login page
	header( "Location: " . WEBSITE_URL . "/login.php" );
}
$is_logged_in = true;
