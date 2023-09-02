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
function selectAll($table, $params = [], $limitOne){
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
    return $query->fetchAll(); //Либо fetch (таблица, а не вся база)
}

printArr(selectAll('users', $params, true));

?>
<html lang="ru"></html>
