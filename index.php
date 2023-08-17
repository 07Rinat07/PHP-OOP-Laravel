<?php

include 'functions.php';

// 1. настроить сервер, что бы все запросы шли автомат на стр.файл index.php
// 2. завардампить $_SERVER
// 3. Router


$routes = [
    "/" => 'functions/homepage.php',
    "/about" => 'functions/about.php'
];
$route = $_SERVER['REQUEST_URI'];

if(array_key_exists($route, $routes)) {
    include $routes[$route]; exit;
} else {
    dd(404);
}


?>