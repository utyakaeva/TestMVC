<?php
namespace application\controllers;
use application\core\Controller;

class ListOrderController extends Controller {
    public function showOrdersAction(){
        $this->view->render('Страница со всеми заявками...');
    }
}