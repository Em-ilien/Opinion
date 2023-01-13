<?php

class Database {
    private static $instance = null;
    private $db;

    private function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=opinion;charset=utf8', 'root', '');
    }

    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new Database();
        }

        return self::$instance;
    }

    public function prepare($sql) {
        return $this->db->prepare($sql);
    }
}