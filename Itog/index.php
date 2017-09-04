<?php

require __DIR__ . '/autoload.php';

$db = new Db();

/**$data = $db->query(
    'SELECT * FROM persons WHERE lastName=:name', [':name' => 'Петров']
);*/
$data = $db->query(
    'SELECT * FROM persons WHERE age>:age',[':age' => 20]);

$view = new View();
$view->assign('persons', $data);
$view->display(__DIR__ . '/templates/index.php');
