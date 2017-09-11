<?php
require __DIR__ . '/classes/DB.php';

if (empty($_POST['title']) || empty($_POST['content']) || empty($_POST['author'])) {
    die;
}
$db = new DB();

$sqlQuery = 'INSERT INTO news (title, content, author) VALUES (:title, :content, :author)';
$data = [
    ':title' => $_POST['title'],
    ':content' => $_POST['content'],
    ':author' => $_POST['author']
];

if (!$db->execute($sqlQuery, $data)) {
    die('Ошибка добавления записи');
}

header('Location: /DZ8/index.php');

