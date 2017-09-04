<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Гостевая книга</title>
    <style>
        article {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px dotted green;
        }
    </style>
</head>
<body>
<h3>Персонал</h3>
<hr>
<?php
foreach ($persons as $person){
    ?>
<ul>
    <li><?php echo $person['lastName']; ?></li>
    <li><?php echo $person['firstName']; ?></li>
</ul>
<?php } ?>

</body>
</html>