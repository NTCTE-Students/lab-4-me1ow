<?php
function multiply(...$numbers) {
    $result = 1;
    foreach ($numbers as $number) {
        $result *= $number;
    }
    return $result;
}

// зов функции
print(multiply(1, 2, 3, 4)); // Результат: 24