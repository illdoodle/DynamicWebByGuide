<?php 
require 'connect.php';

function printArr($value){
    echo '<pre>';
    print_r($value);
    echo '</pre>';
}

function dbCheckError($query){
    $errInfo = $query->errorInfo();
    if($errInfo[0] !== PDO::ERR_NONE){
        echo $errInfo[2];
        exit();
    }
}

// Запрос на получение данных из одной таблицы.
$params = [
    'admin' => 0
];
function select($table, $params = [], $limitOne){
    global $pdo;
    $sql = "SELECT * FROM $table";
    if(!empty($params)){
        $i = 0;
        foreach($params as $key => $value){
            if(!is_numeric($value)){
                $value = "'" . $value . "'";
            }
            if($i === 0){
                $sql = $sql . " WHERE $key = $value";
            }else{
                $sql = $sql . " AND $key = $value";
            }
            $i++;
        }
    }
    if($limitOne){
        $sql = $sql . " LIMIT 1";
    }
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
    return $query->fetch(); //Либо fetchAll (вся база, а не одна таблица)
}

// printArr(select('users', $params, true));

function resetId($table){
    global $pdo;
    $sql = "ALTER TABLE $table AUTO_INCREMENT = 1";
    
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
}
resetId('users');

$insertData = [
    'admin' => '0',
    'username' => 'aboba',
    'email' => 'aboba@gmail.com',
    'password' => 'abobapw'
];

function insert($table, $params){
    global $pdo;
    // Разбираем массив на ключ и значения.
    $i = 0;
    $col = '';
    $mask = '';
    foreach($params as $key => $value){
        // Проверка, которая позволяет не ставит запятые в начале sql запроса (и обрамляет в кавычки).
        if($i === 0){
            $col = $col . "$key";
            $mask = $mask . "'" . "$value" . "'";    
        }else{
            $col = $col . ", $key";
            $mask = $mask . ", '" . "$value" . "'";   
        }
        $i++;
    }
    $sql = "INSERT IGNORE INTO $table ($col) VALUES ($mask)";
    $query = $pdo->prepare($sql);
    $query->execute($params);
    dbCheckError($query);
    return $pdo->lastInsertId();
}
// insert('users', $insertData);

$updateData = [
    'admin' => '1'
];
function update($table, $id, $params){
    global $pdo;
    // Разбираем массив на ключ и значения.
    $i = 0;
    $str = '';
    foreach($params as $key => $value){
        // Проверка, которая корректно ставит запятые в начале sql запроса (и обрамляет в кавычки).
        if($i === 0){
            $str = $str . $key . " = '" . $value . "'";
        }else{
            $str = $str . ", " . $key . " = '" . $value . "'";
        }
        $i++;
    }
    $sql = "UPDATE $table SET $str WHERE id = $id";
    $query = $pdo->prepare($sql);
    $query->execute($params);
    dbCheckError($query);
}
// update('users', '3', $updateData);

function delete($table, $id){
    global $pdo;
    $sql = "DELETE FROM $table WHERE id = $id";
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
}
// delete('users', '4')

?>
<html lang="ru"></html>
