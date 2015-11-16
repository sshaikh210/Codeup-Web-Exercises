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
<title>Ping Pong!</title>
</head>
<body>
	<h1>PONG!</h1>

<h2>Hits: <?= $counter ?></h2>
<a href="ping.php?counter=<?= $counter + 1; ?>"><button>Hit!</button></a>
<a href="pong.php?counter=<?= $counter = 0; ?>"><button>Miss!</button></a>



</body>
</html>
