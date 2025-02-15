<?php
function MaxNumber(array $numbers): int {
    return max($numbers);
}

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
print(MaxNumber($numbers)); 
