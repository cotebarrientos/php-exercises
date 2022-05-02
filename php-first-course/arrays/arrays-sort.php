<?php

$names = ["Maria", "Matias", "Sulley", "Sofia", "Pancho", "Jean"];

sort($names);

echo "<ul>";

foreach ($names as $name) {
    echo "<li>$name</li>";
}


echo "</ul>";

/*

using sort($names);
    - Jean
    - Maria
    - Matias
    - Pancho
    - Sofia
    - Sulley

Using rsort($names);
    - Sulley
    - Sofia
    - Pancho
    - Matias
    - Maria
    - Jean
*/
