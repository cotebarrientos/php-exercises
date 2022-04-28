<?php

$names = array("Maria", "Matias", "Jorge");

echo "<pre>";
print_r($names);

// Array ( [0] => Maria [1] => Matias [2] => Jorge )

/*
    Array
    (
        [0] => Maria
        [1] => Matias
        [2] => Jorge
    )
*/

$southAmericanCities = ["Lima", "Quito", "Buenos Aires", "La Paz"];

print_r($southAmericanCities);

/*
    Array
    (
        [0] => Lima
        [1] => Quito
        [2] => Buenos Aires
        [3] => La Paz
    )
*/

$mixedArray = [111, "Avocado", 10.5, 'Spain', TRUE];

print_r($mixedArray);

/*
    Array
    (
        [0] => 111
        [1] => Avocado
        [2] => 10.5
        [3] => Spain
        [4] => 1
    )
*/
