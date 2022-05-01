<?php

function addTwoNumbers()
{
    // global $c; 
    //this variable is outside of this function, 
    //if you want to use it, you must write the "global" word first
    $a = 5;
    $b = 10;
    // $sum = $a + $b + $c; The result is 35
    $sum = $a + $b;

    echo $sum;
}

$c = 20;
addTwoNumbers();
// echo $a; This variable is only visible inside the function
