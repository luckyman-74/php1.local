<?php
$data = require_once __DIR__ . '/photo/data.php';
?>
<html>
<head>
    <title>Фотогалерея</title>
    <style>
        .photo {
            margin: 5px;
            text-decoration: none;
        }

        .photo img {
            border: 2px solid red;
            width: 120px;
            height: auto;
        }
    </style>
</head>
<body>
<h1>Фотогалерея</h1>
<?php foreach ($data as $id => $image) { ?>
    <div class="photo">
        <a href="/DZ_Urok3/photo/image.php?id=<?php echo $id; ?>">
            <img src="/DZ_Urok3/photo/images/<?php echo $image; ?>">
        </a>
    </div>
<?php } ?>
</body>

</html>
