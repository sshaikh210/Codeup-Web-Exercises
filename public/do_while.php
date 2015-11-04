<?php
$a = 2;
do {
    echo "\$a is equal to {$a}\n";
    $a= $a * $a;
} while ($a <= 100000);
?>