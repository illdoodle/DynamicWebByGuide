<?php 
require 'connect.php';

function printValue($value){
    echo '<pre>';
    print_r($value);
    echo '</pre>';
}

function selectAll($table){
    global $pdo;
    $sql = "SELECT * FROM $table";
    $query = $pdo->prepare($sql);
    $query->execute();
    $errInfo = $query->errorInfo();

    if($errInfo[0] !== PDO::ERR_NONE){
        echo $errInfo[2];
        exit();
    }
    return $query->fetchAll(); //Либо fetch (таблица, а не вся база)
}

printValue(selectAll('users'));

?>