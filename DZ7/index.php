<?php
require __DIR__ . '/classes/GuestBook.php';
$book = new GuestBook(__DIR__ . '/data/gbData.txt');
include __DIR__ . '/templates/index.php';
