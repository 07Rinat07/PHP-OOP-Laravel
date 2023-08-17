<?php

include 'functions.php';
$db = include 'database/start.php';


$posts = $db->getAll();

// 4. foreach all
include 'index.view.php';
?>