<?php

$myLetters = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k"];

$result = array_slice($myLetters, 5);

echo "<pre>";

print_r($result);

/* 
    Array
    (
        [0] => f
        [1] => g
        [2] => h
        [3] => i
        [4] => j
        [5] => k
    )
*/

$newResult = array_slice($myLetters, 0, 5);

print_r($newResult);

/* 
Array
    (
        [0] => a
        [1] => b
        [2] => c
        [3] => d
        [4] => e
    )
*/

$anotherResult = array_slice($myLetters, -6, 4);
print_r($anotherResult);

/* 
    Array
    (
        [0] => f
        [1] => g
        [2] => h
        [3] => i
    )
*/
