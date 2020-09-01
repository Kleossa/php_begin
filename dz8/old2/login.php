<?php
session_start();
$link = mysqli_connect('localhost', 'root', '', 'gbphp');
//var_dump(password_hash('123', PASSWORD_DEFAULT));

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['password']) || empty($_POST['login'])) {
        header('Location: /');
        exit;
    }

    $password = $_POST['password'];
    $login = $_POST['login'];

    $sql = "SELECT login, password FROM users WHERE login = '{$login}'";
    $result = mysqli_query($link, $sql);
    $userData = mysqli_fetch_assoc($result);
    if (!empty($userData) && password_verify($password, $userData['password'])) {
        $_SESSION['user'] = 1;
    }

    header('Location: /');
    exit;
}

if (array_key_exists('exit', $_GET)) {
    session_destroy();
    header('Location: /');
    exit;
}

var_dump($_SESSION);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Тест</title>
</head>
<body>
<?php if (empty($_SESSION['user'])) :?>

<form method="post">
    <input name="login" placeholder="login">
    <input name="password" placeholder="password">
    <input type="submit">
</form>
<?php else :?>
    вы авторизованы!
    <a href="?exit">Выход</a>
<?php endif;?>

</body>
</html>