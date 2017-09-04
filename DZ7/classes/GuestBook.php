<?php
require_once __DIR__ . '/GuestBookRecord.php';

class GuestBook
{
    protected $path;
    protected $records;

    public function __construct($path)
    {
        if (!is_readable($path)) {
            die ('Не удалось открыть файл записей гостевой книги');
        }
        $this->path = $path;
        $data = file($path, FILE_IGNORE_NEW_LINES);
        $this->records = [];
        foreach ($data as $line) {
            $this->records[] = new GuestBookRecord($line);
        }
    }

    public function getAllRecords()
    {
        return $this->records;
    }

    public function append(GuestBookRecord $records)
    {
        $this->records[] = $records;
        return $this;
    }

    public function save()
    {
        file_put_contents($this->path, implode("\n", $this->getAllRecords()));
    }
}