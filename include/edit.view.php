<?php
$QueryBulider = include "../database/start.php";

$id = $_GET['id'];
$oneUser = $QueryBulider->getOne('users', $id);

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Редактировать</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>

	<?php include "navbar.php"; ?>

	<div class="col-md-10 offset-md-1">
		<form action="../update.php" method="POST">
			<div class="form-group">
				<input type="hidden" class="form-control" name="id" value="<?= $oneUser['id']; ?>">
			</div>
			<div class="form-group">
				<label>Имя</label>
				<input type="text" class="form-control" name="name" placeholder="Имя" value="<?= $oneUser['name']; ?>">
			</div>
			<br>
			<div class="form-group">
				<label>Фамилия</label>
				<input type="text" class="form-control" name="surname" placeholder="Фамилия" value="<?= $oneUser['surname']; ?>">
			</div>
			<br>
			<div class="form-group">
				<label>Телефон номер</label>
				<input type="number" class="form-control" name="phone" placeholder="87081712588" value="<?= $oneUser['phone']; ?>">
			</div>
			<br>
			<button type="submit" class="btn btn-primary" name="submit">Изменить</button>
		</form>
	</div>

</body>

</html>