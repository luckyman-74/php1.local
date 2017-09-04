<html>
<head>
    <title> Гостевая книга</title>
</head>
<body>
<h3>Гостевая книга</h3>
<?php
$path = __DIR__ . '/gbdata.txt';

class Guestbook
{
    protected $path, $gbData;

    public function __construct($path)
    {
        $this->path = $path;
        $this->gbData = file($path);
    }

    public function getData()
    {
        return $this->gbData; //Возвращает массив с данными гостевой книги
    }

    public function append($text)
    {
        $this->gbData[] = $text . PHP_EOL;
    }

    public function save()
    {
        $this->str = implode($this->gbData); //Весь массив в строку разделенную переводом строки "PHP_EOL".
        file_put_contents($this->path, $this->str);
        foreach ($this->gbData as $str) {
            echo $str . '<br>';
        }
    }
}

class Uploader
{
    public function __construct($fieldName)
    {
        $this->fieldName = $fieldName;
    }

    public function isUploaded()
    {
        if (isset($_FILES[$this->fieldName])) {
            $this->uploaded = $_FILES[$this->fieldName];
            return true;
        } else {
            return false;
        }
    }

    public function upload()
    {
        if (0 == $this->uploaded ['error']) {
            move_uploaded_file($this->uploaded ['tmp_name'], __DIR__ . '/upload/test.jpg');
            echo 'Файл успешно загружен !';
        }
    }
}

$gb = new Guestbook (__DIR__ . '/gbdata.txt'); //Создаем объект и передаем в конструктор путь до файла.
$gb->getData(); //запускаем метод getData и возвращаем массив с данными из файла.

if (isset($_POST['newcomment'])) {
    $newcom = $_POST['newcomment'];
    $gb->append($newcom);
}
$gb->save();

$upload = new Uploader ('userfile');

if ($upload->isUploaded()) {
    $upload->upload();
}

?>
<p>
<form action="index.php" method="post">
    <label for="newcom">Добавить комментарий:</label>
    <input type="text" name="newcomment" id="newcom">
    <input type="submit">
</form>
<p>
<form action="index.php" method="post" enctype="multipart/form-data">
    <label for="file">Загрузить файл:</label>
    <input type="file" name="userfile" id="file">
    <input type="submit">
</form>
</body>
</html>