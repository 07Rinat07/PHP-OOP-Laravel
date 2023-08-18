<?php

use database\Connection;
use database\QueryBuilder;


$config = include __DIR__ . '/../config.php';
include __DIR__ . '/../database/QueryBuilder.php';
include __DIR__ . '/../database/Connection.php';

 return new QueryBuilder(
     Connection::make($config['database'])
 );



