<?php

//original message

$message = "Ensure that you become familiar with php functions as they are extremely useful.";

//coded message

$encoded = str_rot13($message);

echo $encoded;

echo "<br>";

//decoding the message

$return = str_rot13($encoded);

echo $return;
