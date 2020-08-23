<?php
var_dump($_GET);
var_dump($_POST);
var_dump($_FILES);
$fileName = __DIR__ . '2.php/' . basename($_FILES['userfile']['name']);
//move_uploaded_file($_FILES['userfile']['tmp_name'], $fileName);
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fileName = __DIR__ . '2.php/' . basename($_FILES['userfile']['name']);
    move_uploaded_file($_FILES['userfile']['tmp_name'], $fileName);
}
?>
<form enctype="multipart/form-data" method="POST">
    Отправить этот файл: <input name="userfile" type="file">
    <br>
    <input type="submit" value="Отправить файл">
</form>