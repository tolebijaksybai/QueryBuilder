# QueryBuilder
QueryBuilder - строитель запросов для работы с Базой данных

<a name="index_block"></a>

* [1. Установка](#block1)
* [2. SELECT Statement](#block2)
    * [2.1. SELECT All Statement](#block2.1)     
    * [2.2. SELECT One Statement](#block2.2)  
* [3. INSERT Statement](#block3)
* [4. UPDATE Statement](#block4)
* [5. DELETE Statement](#block5)


* [1. Установка](#block1)

<a name="block1"></a>
### 1. Установка и Конфигурация БД [↑](#index_block)
Для установка компонента надо настроить БД, он находтся в файле config.php:

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
