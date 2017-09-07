<?php

class View
{
    protected $data = [];

    public function assign(string $name, $value): void
    {
        $this->data[$name] = $value;
    }


    public function render(string $template): string
    {
        ob_start(); //Включаем буферизацию вывода
        foreach ($this->data as $key => $value) {
            $$key = $value;
        }
        /* @noinspection PhpIncludeInspection */
        require $template;
        return ob_get_clean(); //Получаем содержимое текущего буфера и затем удаляем текущий буфер
    }


    public function display(string $template): void
    {
        echo $this->render($template);
    }

}