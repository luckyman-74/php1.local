<?php

class View
{
    protected $data = [];

    public function assign($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function render($template)
    {
        ob_start();
        foreach ($this->data as $var => $value) {
            $$var = $value;
        }

        include $template;
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }

    public function display($template)
    {
        echo $this->render($template);
    }
}
