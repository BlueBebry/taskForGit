<?php

function prompt($text) {
    echo $text;
    return trim(fgets(STDIN));
}

function readNumber($name) {
    while (true) {
        $value = prompt("Введите число {$name}: ");
        if (is_numeric($value)) {
            return (float)$value;
        }
        echo "Ошибка: нужно ввести число!\n";
    }
}

$a = null;
$b = null;
