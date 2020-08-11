<?php

return [
  'order/addOrder' => [ //добавление заявки
      'controller' => 'order',
      'action' => 'addOrder',
    ],
    'listOrder/showOrders' => [ //все заявки
    'controller' => 'listOrder',
      'action' => 'showOrders',
    ],
    '' => [
        'controller' => 'main', //главная страница
        'action' => 'index',
    ],
];