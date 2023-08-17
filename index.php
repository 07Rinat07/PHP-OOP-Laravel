<?php

use database\QueryBuilder;

include 'functions.php';
include 'database/QueryBuilder.php';

$pdo = connectToDB();

$db = new QueryBuilder($pdo);
$posts = $db->getAll();

// 4. foreach all
include 'index.view.php';
?>