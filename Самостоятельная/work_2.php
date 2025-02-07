<?php
function Palindrome(string $string): bool {
    $lowerString = strtolower(str_replace(' ', '', $string));
    return $lowerString === strrev($lowerString);
}

$string = "Lol";

print(Palindrome($string)?"Yes":"No");