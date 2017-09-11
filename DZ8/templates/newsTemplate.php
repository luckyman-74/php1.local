<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">

    <title>PHP-1. ДР №8</title>
</head>
<body>
<h1>Новости</h1>

<?php if (!empty($news)) {

    foreach ($news as $article) {
        ?>
        <a href="/DZ8/article.php?id=<?php echo $article['id']; ?>">
            <strong><?php echo $article['title']; ?></strong>
        </a>
        <hr>
        <?php
    }
}
?>

<!-- Форма добавления новости -->
<form action="/DZ7/addNews.php" method="post">
    <label for="title">Заголовок новости:</label>
    <input type="text" name="title"><br>
    <label for="content">Текст новости:</label>
    <textarea name="content"></textarea><br>

    <input type="submit" value="Добавить новость">
</form>
</body>
</html>