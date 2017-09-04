<?php
function __autoload($class)
{
    $path = __DIR__.'/classes/'.str_replace('\\','/',$class).'.php';
    require $path;
}