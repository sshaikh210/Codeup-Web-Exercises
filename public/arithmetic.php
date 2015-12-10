<?php
$a = 5;
$b = 3;
function add($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        return $a + $b;
    } else {
		return errorMessage($a, $b);
    }
}

function subtract($a, $b) {
	if (is_numeric($a) && is_numeric($b)){
		return $a - $b;
	} else {
		return errorMessage($a, $b);
	}
}

function multiply($a, $b) {
	if (is_numeric($a) && is_numeric($b)){
		return $a * $b;
	} else {
		return errorMessage($a, $b);
	}
}

function divide($a, $b) {
	if ($b == 0) {
		return "Error: You cannot divide by 0\n";
	} elseif (is_numeric($a) && is_numeric($b)){
		return $a / $b;
	} else {
		return errorMessage($a, $b);
	}
}

function modulus($a, $b) {
	if (b == 0) {
		return "Error: You cannot divide by 0\n";
	} elseif (is_numeric($a) && is_numeric($b)){
		return $a % $b;
	} else {
		return errorMessage($a, $b);
	}
}

function errorMessage($a, $b) {
	return 'ERROR: Please input only numbers for $a is ' . $a .' and $b is ' . $b . PHP_EOL;
}
// Add code to test your functions here
    echo add($a, $b) . PHP_EOL;
	echo subtract($a, $b) . PHP_EOL;
    echo multiply($a, $b) . PHP_EOL;
    echo divide($a, 0) . PHP_EOL;
    echo modulus($a, $b) . PHP_EOL;