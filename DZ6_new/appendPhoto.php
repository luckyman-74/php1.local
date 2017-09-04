<?php
require __DIR__ . '/classes/Uploader.php';
$upl = new Uploader('userFile'); //Создаем экземпляр класса Uploader и передаем в конструктор имя поля формы.

    if ($upl->upload()) {?>
        <h3>Файл успешно загружен !</h3>
        <br><a href="/DZ6_new/uploadForm.php">На главную</a>
        <?php
    }
?>
