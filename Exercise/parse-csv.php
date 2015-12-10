<?php
$header = ['Units', 'Full Name', 'Employee Number'];
$newHeader = implode("   |   ", $header);
var_dump($newHeader);

function parseNames($filename){

$filename = 'report.txt';
$handle = fopen($filename, 'r');
$contents = fread($handle, filesize($filename));
$contentsArray = explode("\n", $contents);
for($i=0; $i <=5; $i++) {
	$headerInfo = array_shift($contentsArray);
}
foreach ($contentsArray as $employeeParsed) {
	$employeeArray = explode(", ", $employeeParsed);
	$employeeNumber = $employeeArray[0];
	$unitsSold = $employeeArray[3];
	$fullName = $employeeArray[1] . " " . $employeeArray[2];
	$employeeInfo[] = [
		'Units Sold' => $unitsSold,
		'Full Name' => $fullName,
		'Employee Number' => $employeeNumber
	];
	arsort($employeeInfo);
}
return $employeeInfo;
}
var_dump(parseNames('report.txt'));