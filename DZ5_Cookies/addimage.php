<?php
session_start();
require_once __DIR__.'/functions.php';

//Если данных из формы нет, завершаем работу.
if (empty($_FILES)) {
    die;
}
if (getCurrentUser() === null){
    echo 'Загрузка фотографий на сервер требует авторизации !';
    ?><br><a href="/DZ5_Cookies/login.php">Авторизоваться</a><?php
    die;
}

//Проверяем загружен ли файл от пользователя
if (is_uploaded_file($_FILES['image']['tmp_name'])) {
    $tmpName = $_FILES['image']['tmp_name'];

    /*Проверяем на наличие ошибок загрузки*/
    $error = $_FILES['image']['error'];

    if (0 === $error) {

        //Проверяем на соответствие формата файла
        $imgType = $_FILES['image']['type'];

        if ('image/jpeg' === $imgType || 'image/png' === $imgType) {

            //Задаем имя файла для записи. Для заиси используем то же имя, которое было изначально.

            $filename = $_FILES['image']['name'];
            $uploadedPath = __DIR__ . '/images/' . $filename;

            //Если файла с таким именем на сервере нет,
            if (!file_exists($uploadedPath)) {

                //Записываем файл в указанное место
                move_uploaded_file($tmpName, $uploadedPath);

                echo 'Файл успешно загружен.';
                $logFile = getLogFile(); //Получаем массив записей лог-файла
                $logFile[] = date(DATE_RFC822).' || file upload: "'.$filename.'" || login: "'.$_SESSION['user'].'" || '.' name: "'.$_SESSION['name'].'" || ip: '.$_SERVER['REMOTE_ADDR'];
                $str = implode("\n",$logFile);
                $logFilePath = __DIR__ . '/logs/imageUpload.log';
                file_put_contents($logFilePath, $str);

            } else {
                echo 'Извините, файл c таким именем уже существует !';
            }
        } else {
        echo 'Данный формат файла не поддерживается !';
    }
} else {
    echo 'Ошибка загрузки файла !';
}
} else {
    echo 'Вы не выбрали файл !';
}
?>

<br>
<a href="/DZ5_Cookies/">На главную</a>