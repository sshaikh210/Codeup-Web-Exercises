 <?php
 if ($argc < 3) {
 	die("Please enter a range" . PHP_EOL);
 }
 $min = $argv[1];
 $max = $argv[2];
 if ($argv[1] > $argv[2]) {
 	$min = $argv[2];
 	$max = $argv[1];
 }
 if ((!is_numeric($min) || (!is_numeric($max)))); {
 	die("Please enter only numbers" . PHP_EOL);
 } 
 $target = rand($min, $max);
 $tries = 0;
 do {
 	var_dump($argc);
 	if ($argc<2) {
 		$min == 1;
 		$max == 50;
 	}
	fwrite(STDOUT, 'Guess the random number between $min and $max! ');

	// Get the input from user
	$guess = trim(fgets(STDIN));
	// var_dump(trim($firstName));
	if ($guess == $target) {
		fwrite(STDOUT, "You Got It!\n" . PHP_EOL);
	} else if ($guess < $target) {
		fwrite(STDOUT, "Too Low!\n" . PHP_EOL);
	} else if ($guess > $target) {
		fwrite(STDOUT, "Too High!\n" . PHP_EOL);
	}
	$tries++;
} while ($guess != $target);
echo "It took you $tries number of attempts to guess the number" . PHP_EOL;
exit(0);

?>
