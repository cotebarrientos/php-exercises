<?php

$irishCities = ["Dublin", "Cork", "Limerick", "Derry", "Galway", "Waterford", "Drogheda"];

$irishCity = $irishCities[4];

echo $irishCity;

$randomCityPosition = array_rand($irishCities);

echo "<br>";
echo $randomCityPosition;

$randomCity = $irishCities[$randomCityPosition];

echo "<br>";
echo $randomCity;
