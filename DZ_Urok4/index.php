<html>
<head>
    <title> Гостевая книга</title>
</head>
<body>

<?php

require_once __DIR__ . '/functions.php';

    foreach (getGbData() as $record) {
        echo $record;
        ?>
        <hr>
        <?php
    }

?>

<h3>Гостевая книга</h3>

<p>
<form action="/DZ_Urok4/addrecord.php" method="post">
    <label for="newCom">Добавить комментарий:</label>
    <input type="text" name="newComment" id="newCom">
    <input type="submit">
</form>

<form action="/DZ_Urok4/addimage.php" method="post" enctype="multipart/form-data">
    <label for="image">Добавить фото:</label>
    <input type="file" name="image">
    <input type="submit">
</form>

</body>
</html>
