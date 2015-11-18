<?php
require "functions.php";
session_start();
// var_dump($_POST);

$name = inputHas('name') ? inputGet('name') : '';
$password = inputHas('password') ? inputGet('password') : '';
$message = '';

function redirect() {
    header("Location: nav.php");
    die();
}
    if (isset($_SESSION['IS_LOGGED_IN']) && ($_SESSION['IS_LOGGED_IN'])) {
        redirect();
    }
    if ($name == 'guest' && $password == 'password') { 
        $_SESSION['LOGGED_IN_USER'] = $name;
        $_SESSION['IS_LOGGED_IN'] = true;
        redirect();
    } 
    if ($name != 'guest' && $name != '') {
       $message = "Login Failed";
    }

?>
<!DOCTYPE html>
<html>
<head>
    <title>Facebook - Log In or Sign Up</title>
    <link rel="stylesheet" href="/css/login.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet'    type='text/css'>
</head>
<body>
    <div>
    <img src='/img/facebook.jpg' class='img'> 
    <form class='nav' method="POST" action="header.php">
        <label>Email or Phone</label>
        <input type="text" name="name"><br>
        <label>Password</label>
        <input type="password" name="password"><br>
        <label class="uiButton uiButtonConfirm" id="loginbutton" for="u_0_x"><input value="Log In" tabindex="4" type="submit" id="u_0_x"></label>
        <h2><?php echo $message ?></h2>
    </form>
</div>
</body>
</html>