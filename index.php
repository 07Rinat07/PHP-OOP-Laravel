<?php
require_once 'Database.php';

$users= Database::getInstance()->query("SELECT * FROM users WHERE username IN (?,?)", ['John Doe', "Jane Koe"]);



if ($users->error()) {
    echo  'We have an error';
} else {
    foreach ($users->results() as $user) {
        echo $user->username . '<br>';
    }
}





