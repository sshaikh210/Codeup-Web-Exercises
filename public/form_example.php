<?php
var_dump($_POST);
$name = isset($_POST['name']) ? $_POST['name'] : '';
$number = isset($_POST['number']) ? $_POST['number'] : '';

?>
<!DOCTYPE html>
<html>
<head>
    <title>POST Example</title>
</head>
<body>
	<h2>Hello <?= $name; ?> </h2>
	<p>Your number is <?= $number; ?> </p>
    <form method="POST" action="form_results.php">
        <label>Name</label>
        <input type="text" name="name"><br>
        <label>Number</label>
        <input type="text" name="number"><br>
        <input type="submit">
    </form>
</body>
</html>