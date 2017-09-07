<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Домашнее задание №7</title>
</head>
<body>

<h1>Гостевая книга</h1>
<?php
if (!empty($guestBook)) {

    foreach ($guestBook->getAllRecords() as $record) {
        echo $record->getMessage();
        ?>
        <hr>
        <?php
    }
}
?>

<form action="/DZ7/addRecord.php" method="post">
    <label for="newCom">Добавить комментарий:</label>
    <input type="text" name="newComment" id="newCom">
    <input type="submit">
</form>
</body>
</html>