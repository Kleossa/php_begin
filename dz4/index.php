<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Galery</title>
</head>
<body>

<?php

$dir = 'images';
$filesArr = scandir($dir);
unset($filesArr[0]);
unset($filesArr[1]);

foreach ($filesArr as $value)  {

//    echo '<img src="' . $dir . '/' . $value . '" alt="' . $value . '"><br>';
    echo "<a href = \"$dir/$value\"><img src=\"$dir/$value\" width=\"150\" alt=\"$value\"></a><br>";
}

?>

</body>
</html>


