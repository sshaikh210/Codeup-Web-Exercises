<?php

 $a = 10;
 $b = 5;
 $c = '5';

if ($a < $b) {
     // output the appropriate result
     echo "$a is less than $b\n";
} else {
     // output the appropriate result
     echo "$a is greater than $b\n";
}

if ($b >= $c) {
     // output the appropriate result
     echo "$b is greater than or equal to $c\n";
} else {
     // output the appropriate result
     echo "$b is less than or equal to $c\n";
}
if ($b === $c) {
     // output the appropriate result
     echo "$b is identical to $c";
} else if ($b == $c) {
     // output the appropriate result
     echo "$b is equal to $c";
} else if ($b !== $c) {
     // output the appropriate result
     echo "$b is not identical to $c";
} else if ($b != $c) {
     // output the appropriate result
     echo "$b is not equal to $c";
}

 ?>