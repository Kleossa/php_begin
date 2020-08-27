<?php
function indexAction()
{
    return '<h1>Корзина</h1>';
}

function addAction()
{
    if (!array_key_exists('id', $_POST)) {
        header('Location: /?p=cart');
        return;
    }
    $id = $_POST['id'];

    if (!array_key_exists('cart', $_SESSION)) {
        $_SESSION['cart'] = [
            [] => ['id' => $id, 'count' => 0, 'price' => 0, 'cost' => 0]
        ];
    }
    $cart = $_SESSION['cart'];

    for ($i = 0; $i < count($cart); $i++) {
        if ($cart[$i]['id'] == $id) {
            if ($cart[$i]['count'] == 0) {
                $cart[$i]['count']++;
                $price = _getPrice($id);
                $cart[$i]['price'] = $price;
                $cart[$i]['cost'] = $price;
            } else {
                $price = $cart[$i]['price'];
                $count = ++$cart[$i]['count'];
                $cart[$i]['cost'] = $price * $count;
            }
            break;
        }
    }
}

function _addNewProduct($id, $count, $price)
{

}