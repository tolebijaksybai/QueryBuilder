<?php
$config = include "config.php";

include 'connection.php';
include 'QueryBulider.php';

return new QueryBulider(Connection::make($config['database']));
