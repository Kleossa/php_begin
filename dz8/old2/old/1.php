<?php
var_dump($_GET);
var_dump($_POST);

?>
<h1>Логин: <?= $_GET['user']['login']?></h1>
<a href="?user[name]=Саша&user[login]=sasha">Саша</a>
<a href="?user[name]=Юля&user[login]=july">Юля</a>
<a href="?user[name]=Света&user[login]=svet">Света</a>
<hr>
<a href="?">clear</a>

<form method="post" action="?page=1">
    <input name="user[name]" placeholder="name" value="<?= $_POST['user']['name'] ?>">
    <input name="user[login]" placeholder="login" value="<?= $_POST['user']['login'] ?>">
    <input type="checkbox" name="test[]" value="1" <?= hasChecked(1)?>>
    <input type="checkbox" name="test[]" value="2" <?= hasChecked(2)?> >
    <input type="checkbox" name="test[]" value="3" <?= hasChecked(3)?>>
    <input type="submit">
</form>


<?

function hasChecked($id)
{
    if (!empty($_POST['test']) && in_array($id, $_POST['test'])) {
        return 'checked';
    }

    return '';
}