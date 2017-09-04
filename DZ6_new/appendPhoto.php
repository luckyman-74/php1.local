<?php
require __DIR__ . '/classes/Uploader.php';
$upl = new Uploader('userFile'); //Создаем экземпляр класса Uploader и передаем в конструктор имя поля формы.

    if ($upl->upload()) {
        echo 'Файл успешно загружен !'; ?>
        <br><a href="/DZ6_new/uploadForm.php">На главную</a>
        <?php
    }
