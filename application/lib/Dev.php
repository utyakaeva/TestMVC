<?php
 ini_set('display_errors', 1);
 error_reporting(E_ALL); //вывод всех ошибок

function debug($str) {
    echo '<pre>';
    var_dump($str); //пишет тип каждого значения
    echo '<pre>';
    exit;
}