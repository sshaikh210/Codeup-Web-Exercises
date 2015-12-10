<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function avalue($names) {
	$result=array_search('Mike', $names);
	var_dump($result);
	if ($result===false){
		echo "false";
	} else {
		echo "true";
	}
}

 avalue($names);


function compare($names, $compare) {
	$match = 0;
	foreach ($names as $name) {
		if (array_search($name, $compare) !== false){
			$match++;
		}

		}
		 return $match;
	} 
echo compare($names, $compare);
compare($names, $compare);
