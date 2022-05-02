<?php

$irishCities = ["Dublin", "Cork", "Limerick"];

echo "<pre>";

print_r($irishCities);

/*
    Array
    (
        [0] => Dublin
        [1] => Cork
        [2] => Limerick
    )
*/


echo "<br>";
array_push($irishCities, "Derry", "Galway", "Waterford", "Drogheda");

print_r($irishCities);
echo "<br>";
/*
    Array
    (
        [0] => Dublin
        [1] => Cork
        [2] => Limerick
        [3] => Derry
        [4] => Galway
        [5] => Waterford
        [6] => Drogheda
    )
*/

array_unshift($irishCities, "Craigavon");

print_r($irishCities);

/*
Array
    (
        [0] => Craigavon
        [1] => Dublin
        [2] => Cork
        [3] => Limerick
        [4] => Derry
        [5] => Galway
        [6] => Waterford
        [7] => Drogheda
    )
*/
