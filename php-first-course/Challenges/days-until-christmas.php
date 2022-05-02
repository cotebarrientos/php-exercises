<?php

date_default_timezone_set('Europe/Dublin');

$christmasDay = strtotime("December 25");

$daysToChristmas = ceil(($christmasDay - time()) / 60 / 60 / 24);

echo "There are " . $daysToChristmas . " days until Christmas.";
