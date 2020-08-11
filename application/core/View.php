<?php
namespace application\core;
class View{
    public $path;
    public $route;
    public $layout = 'default';
    public function __construct($route)
    {
        $this->route = $route;
        $this->path = $route['controller'].'/'.$route['action'];
        //debug($this->path);
    }
    public function render($title, $vars = []) {
        extract($vars);
        if(file_exists('application/view/'.$this->path .'.php')) {
            ob_start();
            require 'application/view/' . $this->path . '.php';
            $content = ob_get_clean();
            require 'application/view/layouts/' . $this->layout . '.php';
        }
        else{
            echo 'Вид не найден: '.$this->path;
        }
    }
    public function redirect($url){
        header('location'.$url);
        exit;
    }
}