<?php

$myString = "Summer";

$myStringLetters = str_split($myString);

echo "<pre>";

print_r($myStringLetters);

/*
    Array
    (
        [0] => S
        [1] => u
        [2] => m
        [3] => m
        [4] => e
        [5] => r
    )
*/

// Split in 3 characters

$newString = "Spring";

$newStringLetters = str_split($newString, 3);

echo "<pre>";

print_r($newStringLetters);

/*
    Array
    (
        [0] => Spr
        [1] => ing
    )
*/
