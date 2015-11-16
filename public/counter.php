<?php 

function pageController()
{
$counter = isset($_GET['counter']) ? $_GET['counter'] : 0;

return array(
	'counter' => $counter,
	);
}
extract(pageController());
?>
<!DOCTYPE html>
<html>
<head>
<title>Counter</title>
</head>
<body>

<a href="counter.php?counter=<?= $counter + 1; ?>">Up!</a>
<a href="counter.php?counter=<?= $counter - 1; ?>">Down!</a>

<h2>Clicks: <?= $counter ?></h2>


</body>
</html>
