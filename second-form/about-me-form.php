<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$error = "";
$name = "";
$color = "";
$gender = "";
$languages = "";
$value = "";
$myArray = "";

// Name validation
if (empty($_POST['name'])) {
    $error = "Please enter your name <br>";
} else {
    $name = $_POST['name'];
    $name = filter_var($name, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $name = trim($name);
    if ($name == '') {
        $error .= "Sorry but you have not entered your name <br>";
    }
}

// Color validation
if (empty($_POST['color'])) {
    $error .= "Please select a color <br>";
} else {
    $color = $_POST['color'];
    $color = filter_var($color, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $color = trim($color);
    if ($color == '') {
        $error .= "Sorry but you have not selected a color <br>";
    }
}

// Gender validation
if (empty($_POST['gender'])) {
    $error .= "Please select your gender <br>";
} else {
    $gender = $_POST['gender'];
    $gender = filter_var($gender, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $gender = trim($gender);
    if ($gender == '') {
        $error .= "Sorry but you have not selected your gender <br>";
    }
}

// Programming Languages validation
if (empty($_POST['languages'])) {
    $error .= "Please select a programming language <br>";
} else {
    $languages = $_POST['languages'];
    foreach ($languages as $value) {
        $myArray = $value . ", ";
    }
    $myArray = filter_var($myArray, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
}

// Message body

$body = "";
$body .= "Name: ";
$body .= $name;
$body .= "\n";

$body .= "";
$body .= "Color: ";
$body .= $color;
$body .= "\n";

$body .= "";
$body .= "Programming Languages: ";
$body .= $myArray;
$body .= "\n";

$body .= "";
$body .= "Gender: ";
$body .= $gender;
$body .= "\n";


// Address

$sendTo = "testproject2020student@gmail.com";
$subject = "You have a new message from" . $name;

// Send email

if ($error == "") {
    mail($sendTo, $subject, $body);
    echo "success";
} else {
    echo $error;
}
