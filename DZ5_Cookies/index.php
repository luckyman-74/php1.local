<?php
session_start();
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>ДЗ-5 Авторизация, cookies, сессии.</title>
</head>
<body>
<h1>Главная страница</h1>
<hr>
<?php
if (isset($_SESSION['name'])) {
    echo 'Здравствуйте, ' . $_SESSION['name'] . ', логин: ' . $_SESSION['user'] . ' !';
} else {
    echo 'Здравствуйте, гость !';
}
?>
<h3>Фотогалерея</h3>
<?php

require
$imgPath = __DIR__ . '/images';
$imgList = scandir($imgPath, SCANDIR_SORT_NONE);

foreach ($imgList as $image) {
    if ($image !== '.' && $image !== '..') {
        ?>
        <a href="/DZ5_Cookies/image.php?file=<?php echo $image; ?>">
            <img width="15%" src="/DZ5_Cookies/images/<?php echo $image; ?>"></a>
        <?php
    }
}
?>

<hr>
<br>
<form action="/DZ5_Cookies/addimage.php" method="post" enctype="multipart/form-data">
    <label for="image">Добавить фото:</label>
    <input type="file" name="image">
    <input type="submit">
</form>
</body>
</html>
