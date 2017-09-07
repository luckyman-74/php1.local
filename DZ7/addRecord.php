<?php
require __DIR__ . '/classes/GuestBook.php';

if (empty($_POST['newComment'])) {
    die;
}

$record = new GuestBookRecord($_POST['newComment']);

$guestBook = new GuestBook(__DIR__ . '/data/gbData.txt');
$guestBook->append($record)->save();

header('Location: /DZ7/guestBook.php');