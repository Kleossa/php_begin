<?php
//Написать функцию, которая заменяет в строке пробелы на
// подчеркивания и возвращает видоизмененную строчку.

$text = "u lukomoria dub zelenyi!";
echo $text.'<br>';

for ($i =0; $i < strlen($text); $i++){
    if ($text[$i] == ' ')
        $text[$i] = '_';
}
echo $text;
