<?php
	fwrite(STDOUT, 'Choose the number to start with... ');
	$start = trim(fgets(STDIN));
	fwrite(STDOUT, 'Choose the number to end with... ');
	$end = trim(fgets(STDIN));
	fwrite(STDOUT, 'Choose the increment... ');
	$num = trim(fgets(STDIN));
for ($i = $start; $i <= $end; $i+=$num) {
	echo $i . PHP_EOL;
}