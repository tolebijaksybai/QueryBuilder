<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Module 1</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>

	<?php include "navbar.php"; ?>

	<div class="col-md-10 offset-md-1 mb-2">
		<a class="btn btn-primary" href="include/add.view.php">Добавить</a>
	</div>

	<div class="col-md-10 offset-md-1">
		<table class="table">
			<thead class="table-dark">
				<tr>
					<th scope="col">Id</th>
					<th scope="col">Имя</th>
					<th scope="col">Фамилия</th>
					<th scope="col">Телефон номер</th>
					<th scope="col">Действие</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($users as $user) : ?>
					<tr>
						<th scope="row"><?= $user['id'] ?></th>
						<td><?= $user['name'] ?></td>
						<td><?= $user['surname'] ?></td>
						<td><?= $user['phone'] ?></td>
						<td>
							<a class="btn btn-danger" href="../delate.php?id=<?= $user['id'] ?>" onclick="return confirm('Вы дествительно хотите удалить?')">Удалить</a>
							<a class="btn btn-success" href="include/edit.view.php?id=<?= $user['id'] ?>">Редактировать</a>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>

</body>

</html>