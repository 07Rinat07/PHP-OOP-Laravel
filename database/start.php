<?php

use database\Connection;
use database\QueryBuilder;


$config = include 'config.php';
include 'database/QueryBuilder.php';
include 'database/Connection.php';

 return new QueryBuilder(
     Connection::make($config['database'])
 );



