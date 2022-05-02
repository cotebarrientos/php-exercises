<?php

date_default_timezone_set('Europe/Dublin');

// Monday 18th April 2022
echo date('l jS F Y');

echo "<br>";

//Today is Monday
echo "Today is " . date('l');

echo "<br>";

// Monday 18 April, 2022
echo date('l d F, Y');

echo "<br>";

// 2022/04/18   year/month/day
echo date('Y/m/d');

echo "<br>";

// Monday 18th April 2022, 11:40 PM
echo date('l jS F Y, g:i A');

echo "<br>";

// leap year test

if (date('L') == 1) {

    echo date('Y') . " is a leap year";
} else {

    echo date('Y') . " is not a leap year";
}
