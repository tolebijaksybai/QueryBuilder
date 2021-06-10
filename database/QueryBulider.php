<?php

class QueryBulider
{
	public $pdo;

	function __construct($pdo)
	{
		$this->pdo = $pdo;
	}

	public function getAll($table)
	{
		$sql = "SELECT * FROM {$table}";
		$statement = $this->pdo->prepare($sql);
		$statement->execute();

		return $statement->fetchAll(PDO::FETCH_ASSOC);
	}

	public function getOne($table, $id)
	{
		$sql = "SELECT * FROM {$table} WHERE id=:id";
		$statement = $this->pdo->prepare($sql);
		$statement->execute(['id' => $id]);

		return $statement->fetch(PDO::FETCH_ASSOC);
	}
	public function delate($table, $id)
	{
		$sql = "DELETE FROM {$table} WHERE id = :id";

		$statement = $this->pdo->prepare($sql);

		return $statement->execute(['id' => $id]);
	}

	public function update($table, $id, $fields = [])
	{
		$value = '';
		foreach ($fields as $key => $field) {
			$value .= "{$key}='{$field}', ";
		}

		$value = rtrim($value, ' ,');
		$sql = "UPDATE {$table} SET {$value} WHERE id='{$id}'";

		$statement = $this->pdo->prepare($sql);
		return $statement->execute();
	}

	public function insert($table, $fields = [])
	{
		$value = '';
		foreach ($fields as $field) {
			$value .= "'{$field}', ";
		}
		$value = rtrim($value, ' ,');

		$keys = implode(', ', array_keys($fields));

		$sql = "INSERT INTO {$table} ($keys) VALUES ($value)";

		$statement = $this->pdo->prepare($sql);
		return $statement->execute();
	}
}
