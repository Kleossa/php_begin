<?php
function indexAction()
{
    return allAction();
}

function allAction()
{
    return render(
        'orderOne',
        [
            'title' => 'Заказ',
        ]
    );
}

function createAction()
{
    //var_dump($_SESSION);

    $order = ['goods' => $_SESSION['goods'],];
    $json = json_encode($order);
    $json = mysqli_real_escape_string(getLink(), $json);


    $sql = 'insert into orders (user_id, items, status)' .
        " values (1, '$json', 0)";
    mysqli_query(getLink(), $sql);
    unset($_SESSION['goods']);
}

function oneAction()
{
    $sql = 'select items from orders where 1';
    $result = mysqli_query(getLink(), $sql);
    $arr = mysqli_fetch_assoc($result);

    var_dump($result);

    return render(
        'orderOne',
        [
            'goods' => $arr,
            'title' => 'Корзина',
        ]
    );
}