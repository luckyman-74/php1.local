<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">

    <title>PHP-1. ДР №7</title>
</head>
<body>
<h1>Новости</h1>

<?php if (!empty($news)) {

    foreach ($news->getNews() as $key => $article) {
        ?>
        <a href="/DZ7/article.php?id=<?php echo $key; ?>">
            <strong><?php echo $article->title; ?></strong>
        </a>
        <br>
        <em><?php echo $article->getShortenedNews(300); ?></em>
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