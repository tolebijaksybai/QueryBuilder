<?php
$QueryBulider = include "database/start.php";

$id = $_POST['id'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$phone = $_POST['phone'];

$QueryBulider->update('users', $id, [
	'name' => $name,
	'surname' => $surname,
	'phone' => $phone
]);

header("Location: index.php");
