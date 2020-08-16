<?php

function writeLog($file)
{
    $dt = date("H:i:s d/m/Y") . PHP_EOL;
    file_put_contents($file, $dt, FILE_APPEND);
}

function lines($file)
{
    // в начале ищем сам файл. Может быть, путь к нему был некорректно указан
    if (!file_exists($file)) exit("Файл не найден");

    // рассмотрим файл как массив
    $file_arr = file($file);

    // подсчитываем количество строк в массиве
    $lines = count($file_arr);

    // вывод результата работы функции
    return $lines;
}

$logCount = lines('log.txt');
if ($logCount >= 10) {
    $oldName = 'log.txt';

    for ($i = 1; ; $i++) {
        $newName = "log$i.txt";
        if (!file_exists($newName)) {
            rename($oldName, $newName);
            break;
        }
    }
}

writeLog('log.txt');
