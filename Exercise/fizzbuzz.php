<?php

for ($i = 1; $i <= 100; $i++) {
$fizz = $i % 3;
$buzz = $i % 5;
$str = '';
if (!$fizz) {
$str = 'Fizz';
}
if (!$buzz) {
$str .= 'Buzz';
}
if ($fizz && $buzz) {
$str .= $i;
}
echo $str, "\n";
}