<?php
$famousFakePhysicistsArray = ["Gordon Freeman", "Samantha Carter", "Sheldon Cooper", "Quinn Mallory", "Bruce Banner", "Tony Stark"];

 function humanizedList($array, $sort = false) {
 	if ($sort) {
 		sort($array);
 	}
 	$last = array_pop($array);
 	$famousFakePhysicists = implode(", ", $array);
 	echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists} and {$last}.";
}
	humanizedList($famousFakePhysicistsArray, true);
 ?>