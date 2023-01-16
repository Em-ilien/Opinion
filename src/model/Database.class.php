<?php

require_once(__DIR__ . '/../helpers/db.inc.php');

class Database {
    private static $instance = null;
    private $db;

    private function __construct() {
        $this->db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASS);
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