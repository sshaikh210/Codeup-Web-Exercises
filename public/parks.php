<?php
require "functions.php";

$_GET

function pageController() {
$name = isset($_POST['name']) && $_POST != '';
$location = isset($_POST['location']) ? $_POST['location'] : ''
$dateEstablished = isset($_POST['dateEstablished']) ? $_POST['dateEstablished'] : '';
$areasInAcres = isset($_POST['areasInAcres']) ? $_POST['areasInAcres'] : ''
$description = isset($_POST['description']) ? $_POST['description'] : '';
}
extract(pageController());
$query = "INSERT INTO national_parks (name, location, date_established, area_in_acres, description)
VALUES ('$name', '$location', '$dateEstablished', '$areasInAcres', '$description')";