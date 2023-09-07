<?php 
include '../path.php';
include '../app/controller/users.php';
printArr($_POST);
echo $login, '<br>';
echo $email, '<br>'; 
echo $password;
printArr($post);

$id = insert('users', $post);
$last_row = select('users', ['id' => $id], true);
printArr($last_row);
?>