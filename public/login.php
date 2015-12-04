<?php
require "functions.php";
require_once "../lib/auth.php";
require_once "../lib/Input.php";

session_start();

$name = Input::get('name');
$password = Input::get('password');
$message = '';

Auth::attempt($name, $password);

if (Auth::check()) {
     header("Location: authorized.php");
     die();
}

Auth::user();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="/css/login.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet'    type='text/css'>
</head>
<body>
<div class='facebook'> <a href='http://www.underconsideration.com/brandnew/archives/facebook_2015_logo_detail.png'></a></div>
    <form class='nav' method="POST" action="login.php">
        <label>Email or Phone</label>
        <input type="text" name="name"><br>
        <label>Password</label>
        <input type="password" name="password"><br>
        <label class="uiButton uiButtonConfirm" id="loginbutton" for="u_0_x"><input value="Log In" tabindex="4" type="submit" id="u_0_x"></label>
        <h2><?php echo $message ?></h2>
    </form>
</body>
</html>