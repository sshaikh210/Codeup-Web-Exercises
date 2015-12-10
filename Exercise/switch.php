<?php

 // Set the default timezone
 date_default_timezone_set('America/Chicago');

 // Get Day of Week as number
 // 1 (for Monday) through 7 (for Sunday)
 $dayOfWeek = date('N');

switch($dayOfWeek) {
    case 1:
         // Output Monday
        echo "Monday";
        break;
    case 2:
         // Output Tuesday
     // etc through day 7
        echo "Tuesday";
        break;
    case 3:
        echo "Wednesday";
        break;
    case 4:
        echo "Thursday";
        break;
    case 5:
        echo "Friday";
        break;
    case 6:
        echo "Saturday";
        break;
    case 7:
        echo "Sunday";
        break;
}
if ($dayOfWeek == 1) {
    echo "Monday";
} else if ($dayOfWeek == 2) {
    echo "Tuesday;"
} else if ($dayOfWeek == 3) {
    echo "Wednesday";
} else if ($dayOfWeek == 4) {
    echo "Thursday";
} else if ($dayOfWeek == 5) {
    echo "Friday";
} else if ($dayOfWeek == 6) {
    echo "Saturday";
} else if ($dayOfWeek == 7) {
    echo "Sunday";
}