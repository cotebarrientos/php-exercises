<?php

$time = time();

echo $time;

echo "<br>";

$date = strtotime("12th January 2030");

$string = "Next Monday";

$newDate = strtotime($string);

echo $date;

echo "<br>";
echo "--------------------------------------------------------------";
echo "<br>";

$seconds = $date - $time;

$minutes = $seconds / 60;

$hours = $minutes / 60;

$days = floor($hours / 24);

echo "It is $days days until 12th January 2030";

echo "<br>";
echo "--------------------------------------------------------------";
echo "<br>";

$newSeconds = $newDate - $time;

$newMinutes = $newSeconds / 60;

$newHours = $newMinutes / 60;

$newDays = floor($newHours / 24);

echo "It is $newDays days until $string";
