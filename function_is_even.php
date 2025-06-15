<?php

function isEven($number) {
    if ($number % 2 == 0) {
        return "{$number} - четное число";
    } else {
        return "{$number} - нечетное число";
    }
}

// Взов функции
$result = isEven(4);
print($result);