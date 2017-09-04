<?php

class GuestBook
{
    private $gbDataPath, $gbData;

    public function __construct($gbDataPath)
    {
        $this->gbDataPath = $gbDataPath;
        $this->gbData = file($this->gbDataPath, FILE_IGNORE_NEW_LINES);
    }

    public function getData()
    {
        return $this->gbData;
    }

    public function append($text)
    {
        $this->gbData[] = $text;
        return $this; //ОбЪект вернет сам себя
    }

    public function save()
    {
        file_put_contents($this->gbDataPath, implode("\n", $this->getData()));
    }
}