<?php
namespace application\lib;
use PDO;

class Db{
    protected $db;
    public function __construct()
    {
        $config = require 'application/config/db.php';
       // $this->db = new PDO('mysql:host=localhost;dbname=mvc', 'root', '012qwe');
        $this->db = new PDO("'mysql:host='.$this->$config=['host'].';dbname='.$this->$config=['name'].", $config['user'], $config['password']);
        //$this->db = new PDO("'mysql:host=.$config=['host'].;db'name='.$config=['name'].''",$config['user'],$config['password']);
        debug($this->db);
    }
    public function query($sql){
        $query = $this->db->query($sql);
        return $query;

    }
    public function row($sql)
    {
        $result = $this->query($sql);
        return $result->fetchAll();
    }
    public function column($sql)
    {
        $result = $this->query($sql);
        return $result->fetchColumn();
    }
}