<?php
function sumOfDigits(int $number): int {
    $sum = 0;
    while ($number > 0) {
        $sum += $number % 10;
        $number = floor($number / 10);
    }
    return $sum;
}

$numberos = 12345;
echo sumOfDigits($numberos);