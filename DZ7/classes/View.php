<?php

class View
{
    protected $data = [];

    public function assign(string $name, $value)
    {
        $this->data[$name] = $value;
        return $this;
    }


    public function render(string $template): string
    {
        ob_start(); //Включаем буферизацию вывода
        foreach ($this->data as $key => $value) { //Извлекаем переменную  из массива
            $$key = $value; //Получили переменную с массивом объектов-записей (либо гостевой книги либо новостей)
        }
        require $template; //Подключаем шаблон. В нем будут доступны переданные данные в виде переменных
        return ob_get_clean(); //Получаем содержимое текущего буфера и затем удаляем текущий буфер
    }

    public function display(string $template)
    {
        echo $this->render($template); //Пропускаем шаблон через метод render и выводим его в поток
    }

}