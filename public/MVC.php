<?php 
date_default_timezone_get('America/Chicago');
function pageController()
{

$things = ['Shisha', 'Books', 'Spicy Food', 'Shark Tank', 'Daughter'];
$arrayAdjectives = ['Big', 'Little', 'Ugly', 'Beautiful', 'Tall', 'Short', 'High', 'Low', 'Fat', 'Skinny'];
$arrayNouns = ['Home', 'Building', 'Car', 'Person', 'Obama', 'USA', 'Downtown', 'Europe', 'Laptop', 'Butt']; 
$adjectives = array_rand($arrayAdjectives);
$nouns = array_rand($arrayNouns);

$hour = date('G');

$personName = isset($_GET['person_name']) ? $_GET['person_name'] : 'Hampton';

return array(
	'things' => $things,
	'arrayAdjectives' => $arrayAdjectives,
	'arrayNouns' => $arrayNouns,
	'hour' => $hour,
	'adjectives' => $adjectives,
	'nouns' => $nouns,
	'personName' => $_GET['person_name']
	);
}
extract(pageController());
?>
<!DOCTYPE html>
<html>
<head>
	<title>My Favorite Things!</title>
</head>
<body>
	<div clas='container'>
	<h1>My Favorite Things!</h1>

	<table style="width: 100%" background-color='grey'>
		<?php foreach ($things as $words): ?>
			<tr>
				<td><?php echo $words .PHP_EOL ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
	
	<h1 class = 'server'>What is your Server Name?????!</h1>
	<h2 class = 'words'><?= "{$arrayAdjectives[$adjectives]} {$arrayNouns[$nouns]}"; ?></h2>

	<?php if ($hour < 12): ?>
		<h3>Good Morning!</h3>
	<?php elseif ($hour < 18): ?>
		<h3>Good Afternoon!</h3>
	<?php else: ?>
		<h3>Good Evening!</h3>
	<?php endif; ?>

	<h2>Hello <?= $_GET['person_name'] ?></h2>

	<form>method='GET' action='test.php'>
		<label>for='person-name'>Who would you like to say hello to?</label>
		<input type='text' id='person-name' name='person_name'>
		<button type='submit'>Say Hello!</button>
	</form>
	</div>
</body>
</html>