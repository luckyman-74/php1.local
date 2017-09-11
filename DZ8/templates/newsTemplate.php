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
        <p>
            <?php echo $article['text']; ?>
        </p>
        <em>Автор: <?php echo $article['author']; ?> </em>
        <hr>
        <?php
    }
}
?>

<!-- Форма добавления новости -->
<form action="/DZ8/addNews.php" method="post">
    <label for="author">Автор:</label>
    <div>
        <input style="width: 500px" name="author" id="author"
    </div>
    <br>
    <label for="title"> Заголовок новости:</label>
    <div>
        <input type="text" name="title" style="width: 900px" id="title" required><br>
    </div>
    <label for="text"> Текст новости:</label>
    <div>
        <textarea cols="110" rows="10" name="text" id="text" required></textarea><br>
    </div>

    <input type="submit" value="Добавить новость">
</form>
</body>
</html>