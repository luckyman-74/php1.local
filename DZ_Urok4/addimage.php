
//Обработчик формы добавления фото на сервер.

<?php

//Если данных их формы нет, завершаем работу.
if (empty($_FILES)) {
    die;
}
//Проверяем загружен ли файл от пользователя
if (is_uploaded_file($_FILES['image']['tmp_name'])) {
    $tmpName = $_FILES['image']['tmp_name'];

    /*Проверяем на наличие ошибок загрузки*/
    $error = $_FILES['image']['error'];

    if (0 == $error) {

        //Проверяем на соответствие формата файла
        $imgType = $_FILES['image']['type'];

        if ('image/jpeg' == $imgType || 'image/png' == $imgType) {

            //Задаем имя файла для записи. Для заиси используем то же имя, которое было изначально.

            $filename = $_FILES['image']['name'];
            $uploadedPath = __DIR__ . '/images/' . $filename;

            //Если файла с таким именем на сервере нет,
            if (!file_exists($uploadedPath)) {

                //Записываем файл в указанное место
                move_uploaded_file($tmpName, $uploadedPath);

                echo 'Файл успешно загружен.';
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
<a href="/DZ_Urok4/">Назад в галерею</a>