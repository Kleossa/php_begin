<?php
function indexAction()
{
    return allProduct();
}

function allProduct() {
    $result = mysqli_query(getLink(), "SELECT * FROM product ORDER BY visits DESC");

    $content = '';

    while ($row = mysqli_fetch_assoc($result)) {
        $content.= <<<php
        <h1>Название товара: {$row['name']}</h1>
        <p>Цена: {$row['price']}</p>
        <p>Просмотров: {$row['visits']}</p>
       
            <img src = {$row['address']}/{$row['fileName']} width = 150 alt= {$row['name']}>
        <a href = ?p=cart&a=add&id={$row['id']}>Добавить в корзину</a>
        <hr>
php;
    }
    return $content;
}