<?php
REQUIRE 'park_migration.php';

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

$query = 'TRUNCATE national_parks';
$stmt = $dbc->prepare($query);
$stmt->execute();

$query = "INSERT INTO national_parks (name, location, date_established, area_in_acres, description)
VALUES ('Acadia', 'Maine', '1919-02-26', '47389.67', 'Covering most of Mount Desert Island and other coastal islands, Acadia features the tallest mountain on the Atlantic coast of the United States, granite peaks, ocean shoreline, woodlands, and lakes.'),
		('American Samoa', 'American Samoa', '1988-10-31', '9000.00', 'The southernmost national park is on three Samoan islands and protects coral reefs, rainforests, volcanic mountains, and white beaches.'),
		('Arches', 'Utah', '1929-04-12', '76518.98', 'This site features more than 2,000 natural sandstone arches, including the famous Delicate Arch.'),
		('Badlands', 'Texas', '1944-06-12', '801163.21', 'The Badlands are a collection of buttes, pinnacles, spires, and grass prairies.'),
		('Biscayne', 'Florida', '1980-06-28', '172924.07', 'Located in Biscayne Bay, this park at the north end of the Florida Keys has four interrelated marine ecosystems: mangrove forest, the Bay, the Keys, and coral reefs. '),
		('Bruce Canyon', 'Utah', '1929-02-25', '35835.08', 'Bryce Canyon is a giant geological amphitheater on the Paunsaugunt Plateau. '),
		('Canyonlands', 'Utah', '1964-09-12', '337597.83', 'This landscape was eroded into a maze of canyons, buttes, and mesas by the combined efforts of the Colorado River, Green River, and their tributaries, which divide the park into three districts.'),
		('Capitol Reef', 'Utah', '1971-12-18', '241904.26', 'The parks Waterpocket Fold is a 100-mile (160 km) monocline that exhibits the earths diverse geologic layers.'),
		('Congaree', 'South Carolina', '2003-11-10', '26545.86', 'The parks Waterpocket Fold is a 100-mile (160 km) monocline that exhibits the earths diverse geologic layers.'),
		('Crater Lake', 'Oregon', '1902-05-22', '183224.05', 'Crater Lake lies in the caldera of an ancient volcano called Mount Mazama that collapsed 7,700 years ago.'),
		('Denali', 'Alaska', '1917-02-26', '531315.00', 'Centered around Denali, the tallest mountain in North America, Denali is serviced by a single road leading to Wonder Lake.')";
$stmt = $dbc->prepare($query);
$stmt->execute();