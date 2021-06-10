<?php
$QueryBulider = include "database/start.php";

$id = (int)$_GET['id'];

$QueryBulider->delate('users', $id);

header("Location: index.php");
