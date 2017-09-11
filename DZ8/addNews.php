<?php
require __DIR__ . '/classes/DB.php';

if (empty($_POST['title']) || empty($_POST['text']) || empty($_POST['author'])) {
    die;
}
$db = new DB();

$sqlQuery = 'INSERT INTO news (title, text, author) VALUES (:title, :text, :author)';
$data = [
    ':title' => $_POST['title'],
    ':text' => $_POST['text'],
    ':author' => $_POST['author']
];

if (false === $db->execute($sqlQuery, $data)) {
    die('Ошибка добавления записи');
}
header('Location: /DZ8/index.php');

