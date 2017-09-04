<?php

namespace Models;

class GuestBook
{
    protected $file;

    function __construct($file)
    {
        $this->file = $file;
    }

    public function GetAll()
    {
//Следуем принципам ORM. Все должно быть объектами, поэтому создаем функцию, которая собирает массив
//из данных гостевой книги не из строк гостевой книги, а  из ОБЪЕКТОВ-строк.
//Т.е. делаем каждую запись массива данных-объектом. На выходе получим именно массив из объектов-записей.
        $data = file($this->file);//получаем массив из записей гостевой книги.
        $ret = [];//Создаем новый массив, который будет возвращать функция.
//в цикле пробегаемся по старому массиву из строк гостевой книги,
//создаем объект для каждой записи передавая ее в конструктор класса GuestBookRecord
//и сразу помещаем ее в новый массив $res:
        foreach ($data as $line) {
            $ret[] = new GuestBookRecord($line);
        }
        return $ret;//После заполнения массива объектами-записями гостевой, возвращаем его.
    }
}