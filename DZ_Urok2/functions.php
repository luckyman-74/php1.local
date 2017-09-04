<?php

/*Функция вычисления дискриминанта квадратного уравнения*/
function discriminant($a, $b, $c)
{
    return $b ** 2 - 4 * $a * $c;
}

/* Функция вычисления пола человека руководствуясь его именем*/

function detectGender($name)
{
    $femaleLastChar = ['а','я'];
    $maleLastChar = ['в','д','и','й','л','м','н','р','ь'];

    $name = mb_strtolower($name);
    $lastChar = mb_substr($name, mb_strlen($name) - 1, 1);
    if (in_array($lastChar,$femaleLastChar)) {
        return 'Женский пол.';
    } elseif (in_array($lastChar, $maleLastChar)
    ) {
        return 'Мужской пол.';
    }else {
        return null;
    }

}

/* Покрываем тестами функцию вычисления дискриминанта */
assert(discriminant(1, -8, 12) == 16);
assert(discriminant(1, 12, 36) == 0);
assert(discriminant(5, 3, 7) == (-131));

/* Покрываем тестами функцию определения пола человека по его имени */
assert(detectGender('Михаил') == 'Мужской пол.');
assert(detectGender('Ольга') == 'Женский пол.');
assert(detectGender('Ёж') == null);
