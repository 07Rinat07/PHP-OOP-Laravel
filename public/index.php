<?php

include __DIR__ . '/../functions.php';

// 1. настроить сервер, что бы все запросы шли автомат на стр.файл index.php
// 2. завардампить $_SERVER
// 3. Router

// my web server apache2 ===> sites-enabled--->conf

//<VirtualHost *:80>
//    DocumentRoot "C:/laragon/www/code/public"
//    ServerName code.test
//    ServerAlias *.code.test
//    <Directory "C:/laragon/www/code">
//        AllowOverride All
//        Require all granted
//    </Directory>
//</VirtualHost>
//
//# If you want to use SSL, enable it by going to Menu > Apache > SSL > Enabled



// my .htaccess ===>

//AddDefaultCharset UTF-8
//#php_flag display_errors on
//#php_value error_reporting -1;
//#php_value display_startup_errors 1;
//
//<IfModule mod_rewrite.c>
//RewriteEngine On
//RewriteBase /
//RewriteRule ^index\.php$ - [L]
//
//RewriteCond %{REQUEST_FILENAME} !-f
//RewriteCond %{REQUEST_FILENAME} !-d
//
//RewriteCond %{REQUEST_URI} !^/admin/
//RewriteCond %{REQUEST_URI} !/admin
//
//RewriteRule . /index.php [L]
//</IfModule>



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