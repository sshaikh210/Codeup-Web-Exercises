<?php

require_once '../insert_id.php';
require_once '../dbconnect.php';
require_once '../lib/Input.php';

$page = Input::has('page') ? Input::get('page') : 1;
$errors = [];
$selectCount = "SELECT COUNT(*) FROM national_parks";

$stmt1 = $dbc->query($selectCount);

$parks2 = $stmt1->fetch();

$rows = $parks2[0];
 
 if ($page < 1) {
 	$page = 1;
 }

if ($page > ceil($rows/4)) {
	$page = ceil($rows/4);
}
$limit = 4;

$offset = $limit * $page - $limit;

$selectAll = "SELECT * FROM national_parks LIMIT :limit OFFSET :offset";

$stmt = $dbc->prepare($selectAll);
$stmt->bindValue(':limit', 4, PDO::PARAM_INT);
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();

$parks = $stmt->fetchALL(PDO::FETCH_ASSOC);

function insertPark($dbc) {
	
	 {
		$query = "INSERT INTO national_parks (name, location, date_established, area_in_acres, description)
		VALUES (:name, :location, :date_established, :area_in_acres, :description)";

		$stmt2 = $dbc->prepare($query);
		$stmt2->bindValue(':name', $name, PDO::PARAM_STR);
		$stmt2->bindValue(':location', $location, PDO::PARAM_STR);
		$stmt2->bindValue(':date_established', $date_established, PDO::PARAM_STR);
		$stmt2->bindValue(':area_in_acres', $area_in_acres, PDO::PARAM_STR);
		$stmt2->bindValue(':description', $description, PDO::PARAM_STR);
		$stmt2->execute();
	}		
}


if (!empty($_POST)) {

if(Input::get('name') &&
	Input::get('date_established') &&
	Input::get('area_in_acres') &&
	Input::get('location') &&
	Input::get('description')) 
	{
		try {
		$name = Input::getString('name');

	} catch (Exception $e) {
		
		array_push($errors, 'An error occurred: ' . $e->getMessage());
	}

	try {
		$date_established = Input::getDate('date_established');

	} catch (Exception $e) {

		array_push($errors, 'An error occurred: ' . $e->getMessage());

	}	    

	try {
		$location = Input::getString('location');

	} catch (Exception $e) {

		array_push($errors, 'An error occurred: ' . $e->getMessage());
	}	    

	try {
		$area_in_acres = Input::getNumber('area_in_acres');

	} catch (Exception $e) {
		array_push($errors, 'An error occurred: ' . $e->getMessage());

	}	    
	try {
		$description = Input::getString('description');

	} catch (Exception $e) {
		array_push($errors, 'An error occurred: ' . $e->getMessage());
	}
}
	if(empty($errors)){
		insertPark($dbc);
	} else {
		$alert = "You cannot submit an empty form";
		$messages = $errors;
	}
}


?>
<!doctype html>
<html>
<head>
	<title>National Parks</title>
<link href='https://fonts.googleapis.com/css?family=Oswald:700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<style type="text/css">
body {
	background-image: url("img/mountain-03.jpg");
}
.header {
	font-family: 'Indie Flower', cursive;
	font-size: 60px;
	margin: 0px;
}
.title {
	font-family: 'Oswald', sans-serif;
}
.column {
	font-family: 'Oswald', sans-serif;
	text-align: left;
}
.form {
	font-family: 'Oswald', sans-serif;
	text-align: left;
}
</style>
</head>
<body>
	<h1 class='header'>National Parks</h1>
	<h3 class='title'>Database Driven Web Application</h3>

	<table class="table table-hover table-bordered">
		<tr class='column'>
			<th>Park Name</th>
			<th>Location</th>
			<th>Date Established</th>
			<th>Area in Acres</th>
			<th>Description</th>
		</tr>

			<?php
			foreach ($parks as $park):?>
				<tr>
					<td><?= $park['name'] ?></td>
					<td><?= $park['location']?></td> 
					<td><?= $park['date_established']?></td>
					<td><?= $park['area_in_acres']?></td>
					<td><?= $park['description']?></td>
			<?php endforeach ?>
			</tr>
	</table>
	<?php if (isset($alert)):?>
		<h2> <?= $alert ?> </h2>
	<?php endif ?>
	<?php
	foreach ($errors as $key => $value): ?>
		<p><?= $value ?></p>
	<?php endforeach ?>
	<form class="form" action="national_parks.php" method="POST">
		Park Name
		<?php $parkName = (isset($_POST['name'])) ? $_POST['name'] : "";?>
		<input type="text" name="name" value = "<?= $parkName?>">
		Location
		<?php $parkLocation = (isset($_POST['location'])) ? $_POST['location'] : "";?>
		<input type="text" name="location" value = "<?= $parkLocation?>">
		Date Established
		<?php $parkDate = (isset($_POST['date_established'])) ? $_POST['date_established'] : "";?>
		<input type="text" name="date_established" value = "<?= $parkDate?>">
		Area in Acres
		<?php $parkArea = (isset($_POST['area_in_acres'])) ? $_POST['area_in_acres'] : "";?>
		<input type="text" name="area_in_acres" value = "<?= $parkArea?>">
		<br>
		Description<br>
		<?php $parkDescription = (isset($_POST['description'])) ? $_POST['description'] : "";?>
		<textarea rows="4" cols="50" name="description" value = "<?= $parkDescription?>"></textarea>
		<br><br>
		<input type="submit" value="Submit">
	</form>
		<?= "You are on page $page" ?>
	<a button type="button" class="btn btn-default" href="national_parks.php?page=<?= $page + 1; ?>">Next Page</a>
	<a button type="button" class="btn btn-default" href="national_parks.php?page=<?= $page - 1; ?>">Previous Page</a>
</body>
</html>