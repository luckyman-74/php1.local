<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Загрузка файлов</title>
</head>
<body>

<form action="/DZ7/addPhoto.php" method="post" enctype="multipart/form-data">
    <label for="file">Загрузить файл:</label>
    <input type="file" name="userFile" id="file">
    <input type="submit">
</form>
</body>
</html>
