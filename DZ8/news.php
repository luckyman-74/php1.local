<?php
require __DIR__ . '/classes/News.php';
require __DIR__ . '/classes/View.php';
$news = new News(__DIR__ . '/data/newsData.txt');
$view = new View;

$view->assign('news', $news)->display(__DIR__ . '/templates/newsTemplate.php');