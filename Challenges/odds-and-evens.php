<?php

$evens = 0;
$odds = 0;


for($i = 1; $i <= 100; $i++){
    $randomNumber = rand(1, 100);
    if($randomNumber % 2 == 0){
        $evens++;
    } else {
        $odds++;
    }
}


// $randomNumber = rand(1, 100);
//     if($randomNumber % 2 == 0){
//         echo $randomNumber . " = The random number is even<br>";
//     } else {
//         echo $randomNumber . " = The random number is odd";
//     }


echo "There were " . $evens . " even numbers and " . $odds . " odd numbers.";
