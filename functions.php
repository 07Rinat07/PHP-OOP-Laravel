<?php

function connectToDB()
{
    return new PDO('mysql:host=127.0.0.1;dbname=app3;charset=utf8;', 'root', '');
}

function dd($data)
{
echo '<pre>';
    var_dump($data);
    echo '<pre>';
    die;
}

