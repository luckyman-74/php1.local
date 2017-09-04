<?php

if (isset($_FILES['userfile'])){
    $uploaded = $_FILES['userfile'];
if (0==$uploaded['error']){
    move_uploaded_file($uploaded['tmp_name'],__DIR__.'/uploadfile/test.jpg');
    echo 'Файл успешно загружен !';
}

}
