<?php
require __DIR__ . '/classes/GuestBook.php';
require __DIR__ . '/classes/View.php';
$guestBook = new GuestBook(__DIR__ . '/data/gbData.txt');
$view = new View;
$view->assign('guestBook', $guestBook)->display(__DIR__ . '/templates/guestBookTemplate.php');