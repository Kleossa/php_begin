<?php
//Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation),
// где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции.
// В зависимости от переданного значения операции выполнить одну из арифметических операций
// (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).


function mathOperation($arg1, $arg2, $operation)
{
    switch ($operation) {
        case 'сложение':
            return $arg1 + $arg2;
        case 'вычитание':
            return $arg1 - $arg2;
        case 'деление':
            if ($arg2 == 0)
                return 0;
            return $arg1 / $arg2;
        case 'умножение':
            return $arg1 * $arg2;
    }
}

$a = rand(1, 100);
$b = rand(1, 100);

$c = mathOperation($a, $b, 'сложение');
echo "Сумма чисел $a и $b равна $c <br>";

$d = mathOperation($a, $b, 'вычитание');
echo "Разность чисел $a и $b равна $d <br>";

$e = mathOperation($a, $b, 'деление');
echo "Частное чисел $a и $b равно $e <br>";

$f = mathOperation($a, $b, 'умножение');
echo "Произведение чисел $a и $b равно $f <br>";

