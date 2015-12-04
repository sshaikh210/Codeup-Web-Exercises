<?php
session_start();
require_once "../lib/auth.php";
require_once "../lib/Input.php";

var_dump(Auth::user());

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