<?php
session_start();
require_once "../lib/auth.php";
require_once "../lib/Input.php";

var_dump(Auth::user());
// if (!$_SESSION['IS_LOGGED_IN']) {
// 	header("Location: login.php");
// 	die();
// }
// $LOGGED_IN_USER = $_SESSION['LOGGED_IN_USER'];
// var_dump($LOGGED_IN_USER);


?>
<!DOCTYPE html>
<html>
<head>
	<title>Authorized</title>
</head>
<body>
	<h1>Authorized</h1>
	<p> User Logged in: <?php echo Auth::user(); ?> </p>
	<a href="logout.php">Logout</a>
</body>
</html>