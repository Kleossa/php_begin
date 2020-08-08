<?php

$year = date ( 'Y' );
$content =  file_get_contents("template5.html");
$content = str_replace("{{Year}}", $year, $content);
echo $content;