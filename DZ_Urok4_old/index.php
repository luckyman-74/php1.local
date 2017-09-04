<html>
<head>
    <title> Гостевая книга</title>
</head>
<body>
<?php
$path = __DIR__ . '/gbdata.txt';

/**Читаем файл в массив и возвращаем его
 * @return array|bool
 */
function get_gbData($path)
{
    $gbData = file($path);
    return $gbData;
}
?>

<h3>Гостевая книга</h3>
<?php
if (isset($_POST['newcomment'])) {
    $newcom = $_POST['newcomment'];
    $gb = get_gbData($path);
    $gb[] = $newcom . PHP_EOL;
    $str = implode($gb); //Весь массив в строку разделенную переводом строки "PHP_EOL".
    file_put_contents($path, $str); //Записали обновленные данные назад в файл.
}
if (is_readable($path)) {
    $res = get_gbData($path);
    foreach ($res as $str) {
        echo $str . '<br>';
    }
}
?>
<p>
<form action="index.php" method="post">
    <label for="newcom">Добавить комментарий:</label>
    <input type="text" name="newcomment" id="newcom">
    <input type="submit">

</form>
</body>
</html>