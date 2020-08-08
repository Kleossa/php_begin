<?php
//Написать функцию, которая вычисляет текущее время
// и возвращает его в формате с правильными склонениями,
// например: 22 часа 15 минут, 21 час 43 минуты.

// 11, 12, 13, 14 часов
// 1 час
// 2, 3, 4  часа
// 5, 6, 7, 8, 9, 0 часов

// 11, 12, 13, 14, минут
// 1 минута,
// 2, 3, 4 минуты,
// 5, 6, 7, 8, 9 , 0  минут

function get_textHour($hour)
{
    switch ($hour){
        case 11:
        case 12:
        case 13:
        case 14:
            return 'часов';
        case 1:
            return 'час';
    }

    $divHour = $hour % 10;
    switch ($divHour){
        case 2:
        case 3:
        case 4:
            return 'часа';
        default:
            return 'часов';
    }
}

function get_textMinute($minute)
{
    switch ($minute){
        case 11:
        case 12:
        case 13:
        case 14:
            return 'минут';
        case 1:
            return 'минута';
    }

    $divMinute = $minute % 10;
    switch ($divMinute){
        case 2:
        case 3:
        case 4:
            return 'минуты';
        default:
            return 'минут';
    }
}

$hour = (int)date('G');
$minute = (int)date('i');

$textHour = get_textHour($hour);
$textMinute = get_textMinute($minute);

echo "$hour $textHour $minute $textMinute";



