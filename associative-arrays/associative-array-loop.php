<?php

$irishCities = ["Dublin", "Cork", "Limerick", "Derry", "Galway", "Waterford", "Drogheda", "Belfast"];

foreach ($irishCities as $irishCity) {
    echo $irishCity . "<br>";
}

$students = ["Fabiola" => 13, "Sofia" => 13, "Esteban" => 12, "Manuel" => 13, "Marisol" => 12];

echo "<br>";

foreach ($students as $student => $age) {
    echo "$student is $age years old." . "<br>";
}

/* 

Fabiola is 13 years old.
Sofia is 13 years old.
Esteban is 12 years old.
Manuel is 13 years old.
Marisol is 12 years old.

*/
