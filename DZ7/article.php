<?php
require __DIR__ . '/classes/News.php';
require __DIR__ . '/classes/View.php';

if (!isset($_GET['id'])) {
    die;
}

$article_id = (int)$_GET['id'];

$article = (new News(__DIR__ . '/data/newsData.txt'))->getNewsById($article_id);

$view = new View;
$view->assign('article', $article)->display(__DIR__ . '/templates/articleTemplate.php');