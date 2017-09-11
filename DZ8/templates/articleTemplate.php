<?php if (!empty($article)) { ?>
    <article>
        <h1><?php echo $article['title']; ?></h1>
        <hr>
        <p><?php echo $article['text']; ?></p>
        <p><em>Автор: <?php echo $article['author']; ?></em></p>
        <a href="/DZ8/">Вернутся назад</a>
    </article>
<?php } ?>