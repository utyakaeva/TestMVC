<?php
namespace application\models;

use application\core\Model;

class Order extends Model{
    public function order($post)
    {
       $params =[
        'id_zayavki' => '',
        'name'=> $post['name'],
        'date_zayavki' => $post['date_zayavki'],
       ];
    }
}