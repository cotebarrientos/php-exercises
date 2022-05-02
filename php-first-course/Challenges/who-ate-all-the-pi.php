<?php

$radius = 4;
$area = pi() * pow($radius, 2);

echo $area;
echo "<br>";

$roundArea = round($area , 2, PHP_ROUND_HALF_UP);

echo $roundArea;
