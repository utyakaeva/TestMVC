<?php
namespace application\controllers;
use application\core\Controller;
use application\lib\Db;
use mysql_xdevapi\Result;

class MainController extends Controller {
    public function indexAction(){
        $result = $this->model->getList();
        $vars = [
            'zayavki'=>$result,
        ];
        debug($result);
        $this->view->render('ГЛАВНАЯ страница',$vars);
    }
}