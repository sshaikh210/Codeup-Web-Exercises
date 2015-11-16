<?php
var_dump($_POST);
$name = isset($_POST['name']) ? $_POST['name'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

function redirect() {
    header("Location: authorized.php");
    die();
}
    if ($name == 'guest' && $password == 'password') { 
        redirect();
    } else {
       $message = "Login Failed";
    }

?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>
    <form method="POST" action="login.php">
        <label>Username</label>
        <input type="text" name="name"><br>
        <label>Password</label>
        <input type="password" name="password"><br>
        <input type="submit">
        <h2><?php echo $message ?></h2>
    </form>
</body>
</html>