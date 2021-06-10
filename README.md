# QueryBuilder
QueryBuilder - строитель запросов для работы с Базой данных

<a name="index_block"></a>

* [1. Установка](#block1)
* [2. SELECT Statement](#block2)
        * [2.1. SELECT All Statement](#block2.1)     
        * [2.2. SELECT One Statement](#block2.2)  
* [3. SELECT One Statement](#block3)
* [4. INSERT Statement](#block4)
* [5. UPDATE Statement](#block5)
* [6. DELETE Statement](#block6)

<a name="index_block"></a>

## DSQL Is Simple and Powerful

``` php
$query = new Atk4\Dsql\Query();
$query  ->table('employees')
        ->where('birth_date','1961-05-02')
        ->field('count(*)')
        ;
echo "Employees born on May 2, 1961: ".$query->getOne();
```

If the basic query is not fun, how about more complex one?


* [1. Installation](#block1)

<a name="block1"></a>
## 1. Installation [↑](#index_block)
The recommended way to install the SQL Query Builder is through [Composer](http://getcomposer.org). Run the following command to install it:

```sh
php composer.phar require nilportugues/sql-query-builder
```
