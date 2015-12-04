<?php
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'parks_db');
define('DB_USER', 'parks_user');
define('DB_PASS', 'password');

REQUIRE 'dbconnect.php';

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

$query = 'DROP TABLE IF EXISTS national_parks';
$dbc->exec($query);
$query = 'CREATE TABLE national_parks (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	name VARCHAR(240) NOT NULL,
	location VARCHAR(240) NOT NULL,
	date_established DATE NOT NULL,
	area_in_acres FLOAT(10,2) NOT NULL,
	description TEXT NOT NULL,
	PRIMARY KEY (id)
	)';
$dbc->exec($query);
