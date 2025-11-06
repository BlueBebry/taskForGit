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

while (true) {
    echo "\n======= МЕНЮ =======\n";
    echo "1) Ввести два числа\n";
    echo "2) Выполнить сложение\n";
    echo "3) Выполнить вычитание\n";
    echo "4) Выполнить деление\n";
    echo "5) Возвести число в степень\n";
    echo "0) Выход\n";
    echo "====================\n";

    $choice = prompt("Выберите пункт меню: ");

    switch ($choice) {
        case "1":
            $a = readNumber("A");
            $b = readNumber("B");
            echo "Числа сохранены: A = {$a}, B = {$b}\n";
            break;

        case "2":
            if ($a === null || $b === null) {
                echo "Сначала введите числа (пункт 1).\n";
            } else {
                echo "Результат: {$a} + {$b} = " . ($a + $b) . "\n";
            }
            break;

        case "3":
            if ($a === null || $b === null) {
                echo "Сначала введите числа (пункт 1).\n";
            } else {
                echo "Результат: {$a} - {$b} = " . ($a - $b) . "\n";
            }
            break;

        case "4":
            if ($a === null || $b === null) {
                echo "Сначала введите числа (пункт 1).\n";
            } elseif ($b == 0) {
                echo "Ошибка: деление на ноль!\n";
            } else {
                echo "Результат: {$a} / {$b} = " . ($a / $b) . "\n";
            }
            break;

        case "5":
            $base = readNumber("основание");
            $exp  = readNumber("показатель степени");
            echo "Результат: {$base} ^ {$exp} = " . pow($base, $exp) . "\n";
            break;

        case "0":
            echo "Выход из программы.\n";
            exit(0);

        default:
            echo "Неверный пункт меню, попробуйте ещё раз.\n";
    }
}
