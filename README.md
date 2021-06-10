# QueryBuilder
QueryBuilder - строитель запросов для работы с Базой данных

Для работы:
- прописываем конфигурационные данные базы данных в файле init.php
- подключаем init.php

Пример использования:
<pre>
require_once 'init.php';

$db = Database::getInstance();

//получаем всех пользователей из таблицы
$users = $db->get('users', ['id', '>=', 0]);

//получаем пользователя по id
$user_id = $db->get('users', ['id', '=', 5]);
</pre>
