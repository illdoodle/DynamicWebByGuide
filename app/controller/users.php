<?php 
$rootPath = realpath($_SERVER["DOCUMENT_ROOT"]);
include "$rootPath/app/database/database.php";
$errMsg = '';
// Возможно лучше сделать это регулярными выражениями.
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $admin = 0;
    $login = trim($_POST['login']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    
    if($login === '' || $email === '' || $password === '' ){
        $errMsg = 'Не все поля заполнены.';
    }elseif(mb_strlen($password, 'UTF8') < 4){
        $errMsg = 'Пароль должен быть более 4-х символов.';
    }
    $password = password_hash($password, PASSWORD_DEFAULT);
}

$post = [
    'admin' => $admin,
    'username' => $login,
    'email' => $email,
    'password' => $password
];
//На будущее - все же лучше делать без do_login/register.php чтобы выводить ошибки на ту же страницу.
//Ну либо можно попробовать выводить данные отсюда на auth.php через $_SESSION. Но 1. Мне лень. 2. Насколько безопасно передавать данные авторизации через $_SESSION? 
if($errMsg !== ''){
    echo $errMsg;
    die();
}
?>