<?php

$images = require_once __DIR__ .'/data.php';
$id = $_GET['id'];

?>
<html>
<head>
    <style>
        .bigphoto img{
            width: 70%;
        }
    </style>
</head>
<body>
<div class="bigphoto">
<img src="/DZ_Urok3/photo/images/<?php echo $images[$id];?>">
</div>
</body>
</html>