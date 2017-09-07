<?php

class Uploader
{
    private $fieldName;

    public function __construct(string $fieldName)
    {
        $this->fieldName = $fieldName;
    }

    //Метод isUploaded() проверяет - был ли загружен файл от данного имени поля
    public function isUploaded(): bool
    {
        return isset($_FILES[$this->fieldName]['tmp_name']) && $_FILES[$this->fieldName]['error'] === 0;
    }

    //Метод upload() осуществляет перенос файла (если он был загружен!) из временного места в постоянное
    public function upload(): bool
    {
        if ($this->isUploaded() === false) {
            return false;
        }
        return move_uploaded_file($_FILES[$this->fieldName]['tmp_name'], __DIR__ . '/../upload/' . $_FILES[$this->fieldName]['name']);
    }
}


