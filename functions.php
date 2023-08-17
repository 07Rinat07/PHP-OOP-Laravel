<?php
function getAllPosts()
{
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=app3;charset=utf8;', 'root', '');
    $sql = 'SELECT * FROM posts';
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $posts = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $posts;
}
function dd($data)
{
echo '<pre>';
    var_dump($data);
    echo '<pre>';
    die;
}

