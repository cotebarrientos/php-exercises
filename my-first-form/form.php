<?php

$error = "";

// Name validation
if (empty($_POST['name'])) {
    $error = "Please enter your name <br>";
} else {
    $name = $_POST['name'];
    $name = filter_var($name, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
}

// Email validation
if (empty($_POST['email'])) {
    $error .= "Please enter your email <br>";
} else {
    $email = $_POST['email'];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error .= "Please enter a valid email address <br>";
    } else {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    }
}

// Message validation
if (empty($_POST['message'])) {
    $error .= "Please enter your message <br>";
} else {
    $message = $_POST['message'];
    $message = filter_var($message, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
}

// Message body

$body .= "Name: ";
$body .= $name;
$body .= "\n";

$body .= "Email: ";
$body .= $email;
$body .= "\n";

$body .= "Message: ";
$body .= $message;
$body .= "\n";

// Address

$sendTo = "testproject2020student@gmail.com";
$subject = "You have a new message from" . $name;

// Send email

if ($error == "") {
    $success = mail($sendTo, $subject, $body, "from: " . $email);
    echo "success";
} else {
    echo $error;
}
