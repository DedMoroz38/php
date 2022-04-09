<?php

$result = 0;
$arg2 = null;
$arg1 = null;

function add($arg1, $arg2)
{
    return ($arg1 + $arg2);
}
function div($arg1, $arg2)
{
    if (!$arg2 === 0) {
        return ($arg1 / $arg2);
    } else {
        echo "Devision by 0!";
    }
}
function mul($arg1, $arg2)
{
    return ($arg1 * $arg2);
}
function sub($arg1, $arg2)
{
    return ($arg1 - $arg2);
}

if (!empty($_GET)) {
    $arg1 = $_GET['arg1'];
    $arg2 = $_GET['arg2'];
    $operation = $_GET['operation'];
    $result = $operation($arg1, $arg2);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles1.css">
</head>

<body>
    <div class="top">
        <form class="operations-box">
            <input type="text" name="arg1" value="<?= $arg1 ?>" />
            <select name="operation" class="operation-box">
                <option value="mul">*</option>
                <option value="div">/</option>
                <option value="add">+</option>
                <option value="sub">-</option>
            </select>
            <input type="text" name="arg2" value="<?= $arg2 ?>">
            <input type="submit" value="=">
            <input type="text" value="<?= $result ?>">
        </form>
</body>

</html>