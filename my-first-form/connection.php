<?php

$data = "mysql:host=localhost;dbname=register";
$user = "root";
$password = "root";

try {
    $connection = new PDO($data, $user, $password);
    // echo "Connected";
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
