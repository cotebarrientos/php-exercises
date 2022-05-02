<?php

// echo "<pre>";
// print_r($_POST);

// Result in the browser

//     Array
//     (
//         [surname] => Reynoso
//         [gender] => Male
//         [submit] => Submit
//     )

// ------------------------------------------------


if (isset($_POST["submit"])) {
    $surname = $_POST["surname"];

    $gender = $_POST["gender"];

    echo "Your surname is " . $surname . " and your gender is " . $gender;
} else {
    echo "Please visit the form page";
}
