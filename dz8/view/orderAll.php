<?php
/**@var array $orders*/
?>
<h1>Заказы</h1>

<? foreach ($orders as $order) : ?>
    <h3><?= $order['name'] ?></h3>
    <p>
        <img style="width: 100px" src="/img/1.jpg" alt="">
    </p>
    <p><?= $order['info'] ?></p>
    <p><?= $order['price'] ?>р.</p>
    <a href="?p=order&a=one&id=<?= $order['id'] ?>">подробнее</a>
    <p
            style="cursor: pointer;"
            onclick="addGood(<?= $order['id'] ?>)"
    >
        Добавить в корзину
    </p>
    <hr>
<?php endforeach; ?>