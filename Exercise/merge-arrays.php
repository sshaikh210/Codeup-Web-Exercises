<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

 function combine_arrays($names, $compare) {
 	$merged = array();
 	for ($i = 0; $i < count($names); $i++) {
 		if($names[$i] !== $compare[$i]) {
 			array_push($merged, $names[$i], $compare[$i]);
 		} else {
 			array_push($merged, $names[$i]);
 		}
 	} return $merged;
 }
 print_r(combine_arrays($names, $compare));