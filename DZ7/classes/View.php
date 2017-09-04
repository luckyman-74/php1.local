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
        ob_start();
        extract($this->data, EXTR_SKIP);

        /** @noinspection PhpIncludeInspection */
        require $template;

        return ob_get_clean();
    }


    public function display(string $template): void
    {
        echo $this->render($template);
    }

}