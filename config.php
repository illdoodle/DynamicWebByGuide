<?php

$host = 'localhost';
$user = 'root';
$password = 'mysql';
$database = 'site';

$connection = new mysqli($host, $user, $password, $database);
if($connection->connect_error){
    die('connection_error');
}

?>