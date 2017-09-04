<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Домашнее задание к уроку №2</title>
</head>

<p>
<h3>Задание №1 Таблица истинности для операторов "&&" (логическое "И"), "||" (логическое "ИЛИ") и "xor" (исключающее
    "ИЛИ")</h3>
</p>
<table border="1">
    <tr>
        <td>A</td>
        <td>B</td>
        <td>A&&B</td>
        <td>A||B</td>
        <td>A XOR B</td>
    </tr>
    <tr>
        <td>false</td>
        <td>false</td>
        <td><?php echo (int)(false && false); ?></td>
        <td><?php echo (int)(false || false); ?></td>
        <td><?php echo (int)(false xor false); ?></td>
    </tr>
    <tr>
        <td>false</td>
        <td>true</td>
        <td><?php echo (int)(false && true); ?></td>
        <td><?php echo (int)(false || true); ?></td>
        <td><?php echo (int)(false xor true); ?></td>

    <tr>
        <td>true</td>
        <td>false</td>
        <td><?php echo (int)(true && false); ?></td>
        <td><?php echo (int)(true || false); ?></td>
        <td><?php echo (int)(true xor false); ?></td>
    </tr>
    <tr>
        <td>true</td>
        <td>true</td>
        <td><?php echo (int)(true && true); ?></td>
        <td><?php echo (int)(true || true); ?></td>
        <td><?php echo (int)(true xor true); ?></td>
    </tr>
</table>
<p>
<h3>Задание №2. Вычисляем квадратное уравнение.</h3>
</p>
<?php

//Подключаем файл с функциями. Без него дальнейший код работать не будет,вызывая при этом фатальные ошибки.
require_once __DIR__ . '/functions.php';

/* Вводим аргументы квадратного уравнения */
$a = 1;
$b = -2;
$c = -3;

/* Вычисляем дискриминант */
$d = discriminant($a, $b, $c);
?>
Задано квадратное уравнение вида : <b>ax<sup>2</sup>+bx+c=0</b>,где:</p>
<p><?php echo 'a = ' . $a . ', b = ' . $b . ', c = ' . $c; ?>
<p>Вычислим дискриминант по формуле: <b>D=b<sup>2</sup>-4ac:</b></p>
<?php
switch (true) {
    case ($d < 0):
        echo 'Дискриминант D равен (' . $d . ')<0. Корней уравнения не существует !';
        break;
    case ($d == 0):
        echo 'Дискриминант D равен ' . $d . '. Существует только 1 корень!';
        $x = ((-$b) + sqrt($d)) / (2 * $a);
        echo '<b><p>X = ' . $x . '</p></b>';
        break;
    default:
        echo 'Дискриминант D равен ' . $d . '>0. Существует 2 корня!';
        $x1 = ((-$b) + sqrt($d)) / (2 * $a);
        $x2 = ((-$b) - sqrt($d)) / (2 * $a);
        echo '<b><p>X<sub>1</sub> = ' . $x1 . '; X<sub>2</sub> = ' . $x2 . '.</p></b>';
        break;
}
?>
<h3>Задание №3. Что возвращает оператор include, если его использовать как функцию? </h3>
<p>
    <?php

    /*Пример выводит 'PHP', так как во включаемом файле содержится оператор return, который возвращает значение 'PHP'.
    Т.е. оператор include отработал как функция и вернул нам результат своих вычислений. */
    $foo = include __DIR__ . '/return.php';
    var_dump($foo);

    /*Пример возвращает "1", т.к. во включаемом файле не содержится оператор return, код из файла исполняется,
    но ничего не возвращается. Возвращаемое значение "1" говорит лишь об успешном включении файла и нам теперь доступны
    описанные в нем функции, переменные и т.д.*/
    $foo = include __DIR__ . '/noreturn.php';
    var_dump($foo);

    /* Если же файл не может быть включен, возвращается FALSE и возникает E_WARNING.
    $foo = include __DIR__ . '/nofile.php';
    var_dump($foo); */

    ?>

</p>

<h3>Задание №4. Определить пол человека по его имени.</h3>
<p>
    <?php

    echo 'Функция работает только с полными именами.';
    $name = 'Михаил';
    echo '<p>Задано имя: ' . $name . '. ' . detectGender($name) . '</p>';
    $name = 'Ольга';
    echo '<p>Задано имя: ' . $name . '. ' . detectGender($name) . '</p>';
    $name = 'Евгений';
    echo '<p>Задано имя: ' . $name . '. ' . detectGender($name) . '</p>';
    $name = 'Наталья';
    echo '<p>Задано имя: ' . $name . '. ' . detectGender($name) . '</p>';
    $name = 'Ёж';
    echo '<p>Задано имя: ' . $name . '. ' . detectGender($name) . '</p>';

    ?>
</p>
</html>

