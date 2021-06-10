<?php
$QueryBulider = include "database/start.php";

$name = $_POST['name'];
$surname = $_POST['surname'];
$phone = $_POST['phone'];

$QueryBulider->insert('users', [
	'name' => $name,
	'surname' => $surname,
	'phone' => $phone
]);

header("Location: index.php");
