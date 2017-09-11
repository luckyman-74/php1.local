<?php if (!empty($article)) { ?>
    <article>
        <h1><?php echo $article->title; ?></h1>
        <hr>
        <p><?php echo $article->text; ?></p>
        <a href="/DZ8/">Вернутся назад</a>
    </article>
<?php } ?>