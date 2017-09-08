<?php
require __DIR__ . '/classes/News.php';

if (empty($_POST['title']) || empty($_POST['content'])) {
    die;
}

$article = new Article($_POST['title'], $_POST['content']);

$news = new News(__DIR__ . '/data/newsData.txt');
$news->add($article)->save();

header('Location: /DZ7/news.php');