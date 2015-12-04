<?php
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'codeup_test_db');
define('DB_USER', 'codeup');
define('DB_PASS', 'password');

REQUIRE 'dbconnect.php';

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

// Create the query and assign to var
$query = "INSERT INTO users (email, name)
VALUES ('kinza@kinza.com', 'Kinza Shaikh'),
		('haniyah@haniyah.com', 'Haniyah Shaikh'),
		('saamir@saamir.com', 'Saamir Shaikh'),
		('umrah@umrah.com', 'Umrah Shaikh')";

// Execute Query
$numRows = $dbc->exec($query);
echo "Inserted $numRows row." . PHP_EOL;