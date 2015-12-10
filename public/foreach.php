<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);
foreach ($things as $datum1) {
	 if (is_int($datum1)) {
		echo "Integer\n" . PHP_EOL;
	} else if (is_float($datum1)) {
		echo "Float\n" . PHP_EOL;
	} else if (is_bool($datum1)) {
		echo "Boolean\n" . PHP_EOL;
	} else if (is_array($datum1)) {
		echo "Array\n" . PHP_EOL;
	} else if (is_null($datum1)) {
		echo "Null\n" . PHP_EOL;
	} else if (is_string($datum1)) {
		echo "String\n" . PHP_EOL;
	}
}

foreach($things as $datum1) {
 if (is_scalar($datum1)) {
		echo "Scalar\n" . PHP_EOL;
}}

foreach($things as $datum1) {
	if (is_string($datum1)) {
		echo "{$datum1}\n";
	} else if (is_null($datum1)) {
		echo "{$datum1}\n";
	} else if (is_array($datum1)) {
		echo "Array (loop through inner array display here)\n";
	} else if (is_float($datum1)) {
		echo "{$datum1}\n";
	}
}