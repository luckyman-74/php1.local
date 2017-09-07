<?php

class View
{
    protected $data = [];

    public function assign(string $name, $value)
    {
        $this->data[$name] = $value;
    }


    public function render(string $template): string
    {
        ob_start(); //Включаем буферизацию вывода
        extract($this->data, EXTR_SKIP); //Импортируем переменные из массива. Если переменная с таким именем существует, ее текущее значение не будет перезаписано.

        require $template; //Подгружаем наш шаблон

        return ob_get_clean(); //Получаем содержимое текущего буфера и затем удаляем текущий буфер
    }


    public function display(string $template): void
    {
        foreach ($this->data as $key => $value) {
            $$key = $value;
        }
        require $template;
    }

}