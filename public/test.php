<?php
require_once "functions.php";
require_once "Automobile.php";

$beetle = new Automobile('VW', 'Beetle');
var_dump($beetle);

unset($beetle);

echo "end of file";
// $beetle->make = 'VW';
// $beetle->model = 'Beetle';
// $beetle->year = '1968';

// echo $beetle->revEngine('large') . PHP_EOL;

// echo $beetle->getDescription() . PHP_EOL;
// $beetle->honk();

// $beamer = new Automobile();
// $beamer->make = 'BMW';
// $beamer->model = 'M5';
// $beamer->year = '2015';
// $beamer->owner = 'Bob';

// echo $beamer->getDescription() . PHP_EOL;
// echo $beamer->revEngine('large') . PHP_EOL;
?>