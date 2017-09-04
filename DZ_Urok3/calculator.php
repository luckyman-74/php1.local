<html>
<head>
    <title>Калькулятор</title>
</head>
<body>
<?php
/*Подключаем файл с функциями*/
require_once __DIR__ . '/functions.php';


/* Задаем массив допустимых операций (не доверяем пользователю) */
$ops = ['+', '-', '*', '/'];
/* Проверяем заданы ли переменные для вычислений и входит ли оператор в список допустимых*/
if (isset($_GET['x']) && isset($_GET['y']) && isset($_GET['operation']) && in_array($_GET['operation'], $ops)) {
    $x = $_GET['x'];
    $y = $_GET['y'];
    $operation = $_GET['operation'];
} else {
    $x = null;
    $y = null;
    $operation = null;
}
if ($y == 0 && $operation == '/') {
    $res = 'Деление на 0 недопустимо !';
} else {
    $res = calc($x, $y, $operation);
}
?>

<!--Комментарий преподавателя:

<option value="+" <?php /*if ('+' == $operation) { */?> selected <?php /*} */?>>+</option>
<option value="-" <?php /*if ('-' == $operation) { */?> selected <?php /*} */?>>-</option>
<option value="*" <?php /*if ('*' == $operation) { */?> selected <?php /*} */?>>*</option>
<option value="/" <?php /*if ('/' == $operation) { */?> selected <?php /*} */?>>/</option>

Не устали копипастить? Нет? Я бы устал...

Переделал так:
-->
<h3>Калькулятор</h3>
<form action="/DZ_Urok3/calculator.php" method="get">
    <label for="x">x:</label>
    <input type="number" name="x" id="x" step="any" value="<?php echo $x; ?>">
    <select name="operation">

        <?php
        $oper = ['+', '-', '*', '/'];
        foreach ($oper as $op) {
            ?>
            <option value="<?php echo $op; ?>" <?php if ($op == $operation) { ?> selected <?php } ?>><?php echo $op; ?></option>
        <?php } ?>

    </select>
    <label for="y">y:</label>
    <input type="number" name="y" id="y" step="any" value="<?php echo $y; ?>">
    <input type="submit" value="=">
    <?php echo $res; ?>
</form>

</body>
</html>
