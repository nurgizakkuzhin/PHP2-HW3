<?php


namespace App\Classes;


use App\TCollection;
use App\TMagical;

class View implements \Countable
{
    use TMagical, TCollection;

    public function display($template)
    {
        echo $this->render($template);
    }

    public function render($template)
    {
        ob_start();

        foreach ($this->data as $name => $value) {
            $$name = $value;
        }

        include $template;
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }

    public function count()
    {
        return count($this->data);
    }

}