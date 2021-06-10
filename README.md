## QueryBuilder PDO

<a name="index_block"></a>

QueryBuilder - строитель запросов для работы с Базой данных

* [1. Установка](#block1)
* [2. SELECT Statement](#block2)
    * [2.1. SELECT All Statement](#block2.1)     
    * [2.2. SELECT One Statement](#block2.2)  
* [3. INSERT Statement](#block3)
* [4. UPDATE Statement](#block4)
* [5. DELETE Statement](#block5)



<a name="block1"></a>
### 1. Установка и Конфигурация БД [↑](#index_block)

	* Скачать файл .zip
	* Разархивируйте zip-файл
	* Все нужные файли находится в database/

Для установка компонента надо настроить БД, он находтся в файле database/config.php:

```sh
<?php
return [
	"database" => [
		"database" => "module-one",
		"username" => "root",
		"password" => "root",
		"connection" => "mysql:host=localhost",
		"charset" => "utf8",
	]
];
```


<a name="block2"></a>
### 2. SELECT Statement [↑](#index_block)
Есть два вида получение данный из БД: 
	* Select all
	* Select one

```sh
<?php
return [
	"database" => [
		"database" => "module-one",
		"username" => "root",
		"password" => "root",
		"connection" => "mysql:host=localhost",
		"charset" => "utf8",
	]
];
```
