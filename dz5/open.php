<?php

echo '<img src="'.$_GET['image'].'" alt="картинка">';

$link = mysqli_connect('127.0.0.1', 'root', 'root', 'dz5_bd');

$result = mysqli_query($link, "SELECT * FROM images WHERE id =" . $_GET['id']);
$row = mysqli_fetch_assoc($result);

$countVisits = $row['visits'];
$countVisits++;
$sqlUpdate = "UPDATE images SET visits =".$countVisits." WHERE id =" . $_GET['id'];
mysqli_query($link, $sqlUpdate);

var_dump($sqlUpdate);