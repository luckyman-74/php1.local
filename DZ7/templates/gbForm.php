<?php
require __DIR__ . '/classes/GuestBook.php';
$gb = new GuestBook(__DIR__ . '/data/gbData.txt');
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Домашнее задание №6</title>
</head>
<body>

<?php foreach ($gb->getData() as $str) { ?>
    <?php echo $str; ?>
    <br>
<?php } ?>

<hr>
<p>
<form action="/DZ6_new/appendRecord.php" method="post">
    <label for="newCom">Добавить комментарий:</label>
    <input type="text" name="newComment" id="newCom">
    <input type="submit">
</form>

</body>
</html>
