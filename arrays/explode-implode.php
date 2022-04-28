<?php

$string = "Maria, Matias, Jorge, Sulley, Marcela, Sofia, Karol";

$explodedNames = explode(", ", $string);

echo "<pre>";

print_r($explodedNames);

/*
    Array
    (
        [0] => Maria
        [1] => Matias
        [2] => Jorge
        [3] => Sulley
        [4] => Marcela
        [5] => Sofia
        [6] => Karol
    )
*/

$implodedNames = implode(" | ", $explodedNames);

echo "<br>";
echo $implodedNames;

// Maria | Matias | Jorge | Sulley | Marcela | Sofia | Karol