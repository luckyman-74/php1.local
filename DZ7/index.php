<?php
require __DIR__ . '/classes/GuestBook.php';
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>ДЗ-7</title>
</head>
<body>
<h1>Гостевая книга</h1>
<?php

$book = new GuestBook(__DIR__ . '/data/gbData.txt');
var_dump($book);
foreach ($book->getAllRecords() as $record) {
    ?>
    <article>
        <?php echo $record->getMessage(); ?>
    </article>
    <hr>
    <?php
}
?>
</body>
</html>


