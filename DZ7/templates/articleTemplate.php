<?php if (!empty($article)) { ?>
    <article>
        <h1><?php echo $article->title; ?></h1>
        <hr>
        <p><?php echo $article->content; ?></p>
        <a href="/DZ7/news.php">Вернутся назад</a>
    </article>
<?php } ?>