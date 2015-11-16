<?php  $things = array('Shisha', 'Books', 'Spicy Food', 'Shark Tank', 'Daughter'); ?>

<DOCTYPE html>
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
				<td><?= $words .PHP_EOL ?></td>
			</tr>
		<?php endforeach; ?>
	</table>

</body>
</html>
