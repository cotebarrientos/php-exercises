<?php

function uppercase($name)
{
    $result = strtoupper($name);
    return $result;
}

echo uppercase("Vallejos");

// another way

$uppercasedName = uppercase("Barrientos");

echo "<br>" . $uppercasedName;
