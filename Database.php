<?php

class Database {
    private static $instance = null;
    private $pdo;

    /**
     * @param $pdo
     */
    public function __construct()
    {
        try {
            $this->pdo = new  PDO('mysql:host=127.0.0.1;dbname=app3', 'root', '');
            echo 'Ok';
        } catch (PDOException $exception) {
            die($exception->getMessage());
        }
    }

    public static function getInstance() {
        if (!isset(self::$instance)) {
        self::$instance = new Database();
        }
        return self::$instance;
    }
}



