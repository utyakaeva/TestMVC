<?php

namespace application\core;

class Router
{
    protected $routes = [];
    protected $params = [];

    public function __construct()
    {
      $arr = require 'application/config/routes.php';
      foreach ($arr as $key => $val) {
          $this->add($key,$val);
      }
    }
    public function add($route, $params) {
        $route ='#'.$route.'$#';
        $this->routes[$route] = $params;
    }
    public function match(){
        $rootDirPath = trim(str_replace(APP_ROOT_DIR, '', $_SERVER['DOCUMENT_ROOT'] . $_SERVER['REQUEST_URI']), '/');
        $url = ($rootDirPath ? $rootDirPath : '');
        //debug($url);
        //$url = trim($_SERVER['REQUEST_URI'],'/'); //url: foo.localhost/index.php/order/AddOrder/
        //debug($_SERVER);
        foreach($this->routes as $route => $params){
             if (preg_match($route, $url, $matches)){
                 $this->params = $params;
                 return true;
             }
        }
                return false;
    }
    public function run(){
       if($this->match()) {
           $path = 'application\controllers\\'.ucfirst($this->params['controller']).'Controller';
           if(class_exists($path))
           {
              $action = $this->params['action'].'Action';
             // debug($action);
              if(method_exists($path, $action)){
                  $controller = new $path($this->params);
                  $controller->$action();
              } else {
                  echo 'Екшен не найден'.$action ;
              }
           }
           else{
               echo 'Не найден'.$path;
           }
       } else {
           echo 'Маршрут не найден!';
       }
    }
}

