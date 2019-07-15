<?php
require_once './config.php';
require_once './middleware/isAuthenticated.php';
//
//ini_set( 'display_errors', 1 );
//ini_set( 'display_startup_errors', 1 );
//error_reporting( E_ALL );
require_once './database/connect.php';

$sliders_query = 'SELECT * FROM Sliders';
$sliders       = $db->query( $sliders_query )->fetchAll();
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/styles.css">
<title>PHP Starter</title>
</head>
<body>
<div class="layout">
    <div class="bar">
        <div class="user-card">
            <div class="user-image">
                <img src="./assets/images/user_image.png" alt="User image" />
            </div>
            
        </div>
    </div>
    <div class="side">
        <?php require_once './templates/nav.php' ?>
    </div>
    <div class="content">
    <?php require_once './templates/sliders/index.php'; ?>
    </div>
</div>
</body>
</html>
