<?php

namespace database;

use PDO;

class QueryBuilder
{
    protected $pdo;
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    function getAll()
    {
//        dd($this->pdo);

        // 2. Select to db
        $sql = 'SELECT * FROM posts';
        $statement =$this->pdo->prepare($sql);
        $statement->execute();

        //3. Gettting
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}