<?php

require __DIR__ . '/src/ModeCalculator.php';

use ModeCalculator as MC;

// Verify that the script is run with at least one argument
if ($argc < 2) {
    echo "Usage: php run.php 1 2 3 4 2 2 5 6 1 2\n";
    exit(1);
}

// Remove the script name from the arguments and convert them to integers
$numbers = array_slice($argv, 1);
$numbers = array_map('intval', $numbers);


$result = MC::calculate($numbers);
echo "The most frequent number is: $result\n";
