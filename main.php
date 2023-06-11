<?php

require __DIR__ . '/vendor/autoload.php';

use Pierrick\Fizzbuzz\FizzBuzz;

if (is_numeric($argv[1]) === false) {
    throw new InvalidArgumentException('You must provide a number');
}
if ($argv[1] < 1) {
    throw new InvalidArgumentException('You must provide a number greater than 0');
}

$n = $argv[1];

$fizzBuzz = new FizzBuzz();
foreach (range(1, $n) as $number) {
    echo $fizzBuzz->execute($number) . PHP_EOL;
}
