<?php
$QueryBulider = include "database/start.php";

$users = $QueryBulider->getAll('users');

include "include/index.view.php";
