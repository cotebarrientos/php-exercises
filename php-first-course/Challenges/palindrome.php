<?php

if (isset($_POST['submit'])) {
    $word = $_POST['word'];
    $word = str_replace(' ', '', $word); //this line handles spaces
    $reversedWord = strrev($word);
    if ($word == $reversedWord) {
        echo $word . " is a palindrome";
    } else {
        echo $word . " is not a palindrome";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="word" placeholder="Write here...." required>
        <input type="submit" name="submit">
    </form>
</body>

</html>