<?php
require __DIR__ . '/classes/DB.php';
require __DIR__ . '/classes/View.php';
$dataBase = new DB();
$news = $dataBase->query('SELECT id,title FROM news ORDER BY id DESC'); //все новости (самая новая - наверху)

$view = new View;
$view->assign('news', $news)->display(__DIR__ . '/templates/newsTemplate.php');

