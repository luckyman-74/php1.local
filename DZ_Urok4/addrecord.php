<?php

//Обработчик формы добавления записей в гостевую книгу.
//Получает массив уже имеющихся записей гостевой и добавляет к ним новую запись.

$dbPath = __DIR__ . '/data.txt';
require_once __DIR__ . '/functions.php';


if (isset($_POST['newComment'])) {
    $newComment = $_POST['newComment'];
    $gbRecordsFile = getGbData(); //Получаем массив записей

    $gbRecordsFile[] = $newComment;//Добавляем запись к массиву.

    $str = implode("\n",$gbRecordsFile); //Весь массив в строку, разделяя переводом строки

    file_put_contents($dbPath, $str); //Записали обновленные данные назад в файл.
}
header('Location: /DZ_Urok4/'); // Возвращаем на главную.

