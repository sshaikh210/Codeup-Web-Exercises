<?php
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'users_db');
define('DB_USER', 'codeup');
define('DB_PASS', 'password');

require_once 'dbconnect.php';

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

$delete = 'DROP TABLE IF EXISTS contacts';

$dbc->exec($delete);

$query = 'CREATE TABLE contacts (
id INT UNSIGNED NOT NULL AUTO_INCREMENT,
email VARCHAR(100) NOT NULL,
name VARCHAR(100) NOT NULL,
phone VARCHAR(100) NOT NULL,
address VARCHAR(100) NOT NULL,
city VARCHAR(100) NOT NULL,
state VARCHAR(100) NOT NULL,
zip VARCHAR(5) NOT NULL,
PRIMARY KEY (id),
UNIQUE (email)
)';

$dbc->exec($query);