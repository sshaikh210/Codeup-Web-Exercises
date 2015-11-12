<?php  
$arrayAdjectives = array('Big', 'Little', 'Ugly', 'Beautiful', 'Tall', 'Short', 'High', 'Low', 'Fat', 'Skinny');
$arrayNouns = array('Home', 'Building', 'Car', 'Person', 'Obama', 'USA', 'Downtown', 'Europe', 'Laptop', 'Butt' ); 

$adjectives = array_rand($arrayAdjectives);
$nouns = array_rand($arrayNouns);
?>

<DOCTYPE html>
<html>
<head>
	<title>Hello Servers!</title>
</head>
<body>
	<h1 class = 'server'>What is your Server Name?????!</h1>
		<h2 class = 'words'><?php echo "{$arrayAdjectives[$adjectives]} {$arrayNouns[$nouns]}"; ?></h2>

</body>
</html>
