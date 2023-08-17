<?php

namespace database;

use PDO;

class Connection
{
    public static function make()
    {
        $pdo = new PDO('mysql:host=127.0.0.1;dbname=app3;charset=utf8;', 'root', '');
        return $pdo;
    }

}