<?php

function countWords(string $stroka): int {
    return count(preg_split('/\s+/', trim($stroka)));
}

$stroka = "Съешь ещё этих мягких французских булок, да выпей же чаю.";

print(countWords($stroka));