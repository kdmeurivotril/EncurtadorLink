<?php
class Database {
    private $pdo;

    public function __construct() {
        $config = include(__DIR__ . '/../config/config.php');
        $dsn = "mysql:host={$config['db_host']};dbname={$config['db_name']};charset=utf8";
        $this->pdo = new PDO($dsn, $config['db_user'], $config['db_pass']);
    }

    public function getPdo() {
        return $this->pdo;
    }
}
?>
