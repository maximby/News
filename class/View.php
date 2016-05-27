<?php


class View {

    protected $data = [];


    public function __set($n, $v) {

        $this->data[$n] = $v;

    }

    public function render($template) {

        foreach ($this->data as $key => $vel) {
            $$key = $vel;
        }

        ob_start(); // @todo довавить реализацию
        include __DIR__ . '/../view/' . $template;
        $content =  ob_get_contents();
        ob_end_clean();

        return $content;
    }

    public function display($template) {

        echo $this->render($template);

    }
} 