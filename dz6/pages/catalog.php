<?php

$idPage = $_GET['page'];
$idProduct = array_key_exists ('id', $_GET)? (int)$_GET['id']: 0 ;

function allProduct($link, $idPage) {
    $result = mysqli_query($link, "SELECT * FROM product ORDER BY visits DESC");
    while ($row = mysqli_fetch_assoc($result)) {
        echo <<<php
        <h1>Название товара: {$row['name']}</h1>
        <p>Цена: {$row['price']}</p>
        <p>Просмотров: {$row['visits']}</p>
        <a href = ?page={$idPage}&id={$row['id']}> 
            <img src = {$row['address']}/{$row['fileName']} width = 150 alt= {$row['name']}>
        </a>
        <hr>
php;
    }
}

function oneProduct ($link, $idPage, $idProduct) {
    $result = mysqli_query($link, "SELECT * FROM product WHERE id = $idProduct");
    while ($row = mysqli_fetch_assoc($result)) {
        echo <<<php
        <h1>Название товара: {$row['name']}</h1>
        <p>Цена: {$row['price']}</p>
        <p>Просмотров: {$row['visits']}</p>
        <a href = ?page={$idPage}&id={$row['id']}> 
            <img src = {$row['address']}/{$row['fileName']} alt= {$row['name']}>
        </a>
        <hr>
php;
    }
}

if ($idProduct > 0)
{
    oneProduct($link, $idPage, $idProduct);
}
else{
    allProduct($link, $idPage);
}

