<?php
// Реализовать основные 4 арифметические операции в виде функций с двумя параметрами.
// Обязательно использовать оператор return.

function opSum ($a, $b) {
    $sum = $a + $b;
    return "$sum";
}

function opDiv ($a, $b) {
        $diff = $a - $b;
        return "$diff";
}

function opCom ($a, $b) {
    $com = $a * $b;
    return "$com";
}

function opPriv ($a, $b) {
    $priv = $a / $b;
    return "$priv";
}

$a =  rand(1, 100);
$b =  rand(1, 100);

$d = opSum ($a, $b);
$c = opDiv ($a, $b);
$e = opCom ($a, $b);
$f = opPriv ($a, $b);

echo "Сумма чисел $a и $b равна $d <br>";
echo "Разность чисел $a и $b равна $c <br>";
echo "Произведение чисел $a и $b равно $e <br>";
echo "Частное от деления числа $a на число $b равно $f <br>";











