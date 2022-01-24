<?php

$a = 10;

$b = 6;

$c = TRUE;

$d = FALSE;

$e = 10;

$f = 10.00;

if($a == 10 && $e == 10){
    echo "TRUE";
} else {
    echo "FALSE";
}

echo "<br>";

if($a === $e && $a === $f){
    echo "TRUE";
} else {
    echo "FALSE";
}

echo "<br>";

if($a != $e || $b < $f){
    echo "TRUE";
} else {
    echo "FALSE";
}

echo "<br>";

if($a >= $e && $b < $f){
    echo "TRUE";
} else {
    echo "FALSE";
}

echo "<br>";

if($c && ($a == $f && $b < $f)){
    echo "TRUE";
} else {
    echo "FALSE";
}

echo "<br>";

if($d || ($a === $e || $b > $f)){
    echo "TRUE";
} else {
    echo "FALSE";
}

echo "<br>";

if($d || ($a === $f && $b > $e)){
    echo "TRUE";
} else {
    echo "FALSE";
}

// $a = 10;
// $b = FALSE;
// $c = TRUE;
// $d = 1;
 
// if(($a > $d || !$b) && !$c == $b){
//     echo "TRUE";
// } else {
//     echo "FALSE";
// }