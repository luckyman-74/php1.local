<?php
require __DIR__ . '/classes/DB.php';
require __DIR__ . '/classes/View.php';

if (!isset($_GET['id'])) {
    die;
}

$articleId = (int)$_GET['id'];

$db = new DB();
$article = $db->query('SELECT * FROM news WHERE id = :id', [':id' => $articleId]);

if (empty($article)) {
    die;
}

$view = new View();
$view->assign('article', $article[0])->display(__DIR__ . '/templates/articleTemplate.php');