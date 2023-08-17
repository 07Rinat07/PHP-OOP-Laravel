<?php

use database\Connection;
use database\QueryBuilder;

include 'database/QueryBuilder.php';
include 'database/Connection.php';

 return new QueryBuilder(
     Connection::make()
 );



