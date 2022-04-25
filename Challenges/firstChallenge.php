<?php

// Rectangle

$length = 10;
$width = 5;

$areaRectangle = $length * $width;

echo "The Rectangle area is $areaRectangle";
echo "<br>";

// Triangle

$base = 12;
$height = 3;

$areaTriangle = $base * $height / 2;

echo "The Triangle area is $areaTriangle";
echo "<br>";

// Circle

$radius = 5;
$exponent = 2;
$pi = 3.14;

$areaCircle = $pi * pow($radius, $exponent);
// other way $areaCircle = pi() * pow($radius , 2);

echo "The Circle area is $areaCircle";
echo "<br>";

// Trapezium 

$sideA = 10;

$sideB = 8;

$trapeziumHeight = 4;

$areaTrapezium = ($sideA + $sideB) * $trapeziumHeight / 2;

echo "The Trapezium area is $areaTrapezium";
echo "<br>";
