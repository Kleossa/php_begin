
<form method="post">
    <input type="text" name="value1" placeholder="value1"><br>
    <input type="text" name="value2" placeholder="value2"><br>
    <input type="submit" name="operation[sum]"  value="Сумма">
    <input type="submit" name="operation[sub]"  value="Разность">
    <input type="submit" name="operation[mult]"  value="Произведение">
    <input type="submit" name="operation[div]"  value="Частное"><br>
</form>

<?php
function mathOperation($arg1, $arg2, $operation)
{
    switch ($operation) {
        case 'sum':
            return $arg1 + $arg2;
        case 'sub':
            return $arg1 - $arg2;
        case 'div':
            if ($arg2 == 0)
                return 0;
            return $arg1 / $arg2;
        case 'mult':
            return $arg1 * $arg2;
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $value1 = (int)$_POST['value1'];
    $value2 = (int)$_POST['value2'];
    $operation = array_keys( $_POST['operation'])[0];
    $result = mathOperation($value1, $value2, $operation);
    echo  "<input type='text' name='result' readonly placeholder='{$result}'><br>";
}
?>
