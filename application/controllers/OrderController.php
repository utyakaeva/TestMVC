<?php
namespace application\controllers;
 use application\core\Controller;

 class OrderController extends Controller {
      public function addOrderAction(){
          $this->model->addOrder($_POST);
          $this->view->message('success','заявка добавлена');
          $this->view->render('Страница добавления заявки...');
      }
 }