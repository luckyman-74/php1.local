<?php
//Функция читает файл и возвращает массив записей гостевой книги

function getGbData()
{
    return file(__DIR__ . '/data.txt', FILE_IGNORE_NEW_LINES);

}
