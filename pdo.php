<?php

//Кодировку по необходимсости.
$connection = new PDO("mysql:host=localhost; dbname=site; charset=utf8", "root", "mysql");
//P.S. В запросах можно писать без INTO, вместо VALUES = VALUE или даже SELECT (???) - будет работать.

//Прямой запрос
//$query = "INSERT INTO shop (name, amount, price) VALUES ('computer', 201, 75000)";
//$connection->exec($query);

//Подготовленный запрос. Помогает против SQL инъекций (а плейсхолдеры еще сильней помогают).
$name = 'prepare_computer';
$amount = 100;
$price = '85000';

//Хранитель плейсхолдеров
$param = [
    'n' => $name,
    'a' => $amount,
    'p' => $price
];

$sql = "INSERT INTO shop (name, amount, price) VALUES (:n, :a, :p)";

//Подготовка самого запроса.
$query = $connection->prepare($sql);

$query->execute($param);

//Если нет аналога массива $param \/
//Плейсхолдеры - :n = $name, :a = $amount, :p = $price
//$query->execute(['n'=>$name, 'a'=>$amount, 'p'=>$price])

//Еще один пример подготовленного запроса в виде удаления данных (по четным id).
$sql = "DELETE FROM shop WHERE id % 2 = 0";
$query = $connection->prepare($sql);
$query->execute();

//И еще один пример подготовленного запроса в виде изменения данных (цена).
$sql = "UPDATE shop SET price = 100000 WHERE id = 1";
$query = $connection->prepare($sql);
$query->execute();

//Соединение закрывается АВТОМАТИЧЕСКИ!!1111. Если требуется постоянное соединение - в мануал по пхп.

?>

