<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Nature</title>
</head>
<body>

<?php

$link = mysqli_connect('127.0.0.1', 'root', 'root', 'dz5_bd');

$result = mysqli_query($link, "SELECT * FROM images ORDER BY visits DESC");

while ($row = mysqli_fetch_assoc($result)) {
    echo <<<php
        <h1>Name: {$row['name']}</h1>
        <p>Size: {$row['size']}</p>
        <p>Visits: {$row['visits']}</p>
        <a href = open.php?image={$row['address']}/{$row['name']}&id={$row['id']}> 
            <img src = {$row['address']}/{$row['name']} width = 150 alt= {$row['name']}>
        </a>
        <hr>
php;
}

?>

</body>
</html>


