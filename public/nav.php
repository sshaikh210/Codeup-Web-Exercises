<?php
session_start();

if (!$_SESSION['IS_LOGGED_IN']) {
	header("Location: header.php");
	die();
}
$LOGGED_IN_USER = $_SESSION['LOGGED_IN_USER'];
var_dump($LOGGED_IN_USER);


?>
<!DOCTYPE html>
<html>
<head>
	<title>Authorized</title>
</head>
<body>
	<h1>Authorized</h1>
	<p> User Logged in: <?php echo $LOGGED_IN_USER ?> </p>
	<a href="footer.php">Logout</a>
</body>
</html>