<?php

if (count($argv) < 2) {
    die("Un argument est requis !" . PHP_EOL);
}

if (count($argv) > 2) {
    die("Trop d'arguments, un seul nécessaire !" . PHP_EOL);
}

$argument = $argv[1];

if (!is_numeric($argument)) {
    die("L'argument doit être une chaîne de caractère !" . PHP_EOL);
}

$result = calculateSquare($argument);

die("Le carré de {$argument} est {$result} !" . PHP_EOL);

function calculateSquare($number)
{
    return $number * $number;
}
