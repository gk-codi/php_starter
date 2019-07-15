<?php
session_start();

if ( isset( $_POST['form_type'] ) ) {
	require_once './database/connect.php';
	
	$form_type = $_POST['form_type'];
	
	if ( $form_type === 'login_form' ) {
		var_dump( $_POST );
		$email    = $_POST['email'];
		$password = $_POST['password'];
		$query    = 'SELECT * FROM Users WHERE email=:email and password=:password';
		$stmt     = $db->prepare( $query );
		$stmt->bindParam( ':email', $email );
		$stmt->bindParam( ':password', $password );
		
		$stmt->execute();
		$user_row = $stmt->fetch();
		if ( count( $user_row ) > 0 ) {
			// user available
			// lets log user in
			var_dump($_SESSION);
			$_SESSION['user_id'] = $user_row['id'];
//			$_SESSION['name']    = $user_row['name'];
			
			header('Location: /');
		}
	} else if ( $form_type === 'register_form' ) {
	
	}
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
 <meta name="viewport"
       content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
             <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>Login page</title>
	<link rel="stylesheet" type="text/css" href="./assets/css/login.css" />
</head>
<body>
<div class="form-structor">
	<div class="signup">
		<h2 class="form-title" id="signup"><span>or</span>Sign up</h2>
		<form method="post" action="/login.php">
			<div class="form-holder">
				<input type="text" name="name" class="input" placeholder="Name" />
				<input type="email" name="email" class="input" placeholder="Email" />
				<input type="password" name="password" class="input" placeholder="Password" />
				<input type="hidden" name="form_type" value="register_form" />
			</div>
			<button class="submit-btn">Sign up</button>
		</form>
	</div>
	<div class="login slide-up">
		<div class="center">
			<h2 class="form-title" id="login"><span>or</span>Log in</h2>
			<form method="post" action="login.php">
				<div class="form-holder">
					<input type="email" name="email" class="input" placeholder="Email" />
					<input type="password" name="password" class="input" placeholder="Password" />
                    <input type="hidden" name="form_type" value="login_form" />

				</div>
				<button class="submit-btn">Log in</button>
			</form>
		</div>
	</div>
</div>
<script src="./assets/js/login.js"></script>
</body>
</html>
