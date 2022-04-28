<?php

$myCities = ["Moscow", "Alicante", "London", "Naples", "Tokio", "Toronto"];

// To remove the last city inside the array
$lastCity = array_pop($myCities);

echo $lastCity;

echo "<br>";
echo "<pre>";

print_r($myCities);

/*

echo $lastCity;

Toronto

print_r($myCities);
    Array
    (
        [0] => Moscow
        [1] => Alicante
        [2] => London
        [3] => Naples
        [4] => Tokio
    )
*/

// To remove the first city in the array
$firstCity = array_shift($myCities);

echo "<br>";
echo $firstCity;
echo "<br>";

print_r($myCities);

/*

echo $lastCity;

Moscow

print_r($myCities);
    Array
    (
        [0] => Alicante
        [1] => London
        [2] => Naples
        [3] => Tokio
    )
*/
