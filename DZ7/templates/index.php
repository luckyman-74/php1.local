<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">

    <title>Document</title>
</head>
<body>
<h1>Пример</h1>
<article>

    <?php foreach ($book->getAllRecords() as $record) { ?>
        <article>
            <?php echo $record->getMessage(); ?>
        </article>
        <hr>
        <?php
    }
    ?>

</body>
</html>
