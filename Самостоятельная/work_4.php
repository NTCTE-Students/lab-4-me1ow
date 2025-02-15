<?php

function sorter(array $numbers): array {
    sort($numbers);
    return $numbers;
}
$numbers = [1, 2, 3, 4, 7, 6, 5, 8, 9, 10];
$sortednumbers = sorter($numbers);
print_r($sortednumbers);