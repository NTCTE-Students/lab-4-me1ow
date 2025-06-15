<?php

function greetUser($name = 'гость') {
    echo "Привет, {$name}!";
}

// Вызов фунции
greetUser();
greetUser('Анна');