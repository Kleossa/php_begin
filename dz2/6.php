<?php
//С помощью рекурсии организовать функцию возведения числа в степень.
// Формат: function power($val, $pow), где $val – заданное число, $pow – степень.

function power($val, $pow)
{
    if ($pow > 1)
        $val = $val * power($val, --$pow);
    return $val;
}

echo power(4, 3);