<?php
/**
 * Created by PhpStorm.
 * User: gabykaram
 * Date: 2019-07-08
 * Time: 16:25
 * File: connect.php
 */

// Set default timezone
date_default_timezone_set( 'UTC' );

try {
	/**************************************
	 * Create databases and                *
	 * open connections                    *
	 **************************************/
	
	// Create (connect to) SQLite database in file
	$db = new PDO( 'sqlite:db.sqlite3' );
	// Set errormode to exceptions
	$db->setAttribute( PDO::ATTR_ERRMODE,
		PDO::ERRMODE_EXCEPTION );
	
	/**************************************
	 * Create tables                       *
	 **************************************/
	
	// Create table messages
	$db->exec( "CREATE TABLE IF NOT EXISTS Users (
				   id integer NOT NULL CONSTRAINT Users_pk PRIMARY KEY,
				   name varchar(255) NOT NULL,
				   password text NOT NULL,
				   email text NOT NULL UNIQUE,
				   created_at datetime NOT NULL,
				   updated_at datetime NULL,
				   deleted_at datetime NULL
                   )" );
	
	/**************************************
	 * Set initial data                    *
	 **************************************/
	
	// Array with some test data to insert to database
	$users = array(
//		array(
//			'name'       => 'Batata',
//			'password'   => 'harra',
//			'email'      => 'admin@admin.com',
//			'created_at' => date( 'Y-m-d H:i:s' ),
//		)
	);
	/**************************************
	 * Play with databases and tables      *
	 **************************************/
	
	// Prepare INSERT statement to SQLite3 file db
	$insert = "INSERT INTO Users (name, password, email, created_at)
                VALUES ( :name, :password, :email, :created_at )";
	$stmt   = $db->prepare( $insert );
	
	// Bind parameters to statement variables
	$stmt->bindParam( ':name', $name );
	$stmt->bindParam( ':password', $password );
	$stmt->bindParam( ':email', $email );
	$stmt->bindParam( ':created_at', $created_at );
	
	// Loop thru all users and execute prepared insert statement
	foreach ( $users as $user ) {
		// Set values to bound variables
		$name       = $user['name'];
		$password   = $user['password'];
		$email      = $user['email'];
		$created_at = $user['created_at'];
		
		// Execute statement
		$stmt->execute();
	}
	
} catch ( PDOException $e ) {
	echo $e->getMessage();
}
