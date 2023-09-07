<?php 
$rootPath = realpath($_SERVER["DOCUMENT_ROOT"]);
include "$rootPath/path.php";
?>
<header class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h1>
                    <a href="<?php echo BASE_URL ?>">My Blog</a>
                </h1>
            </div>
            <nav class="col-8">
                <ul>
                    <li><a href="<?php echo BASE_URL ?>">Главная</a></li>
                    <li><a href="<?php echo BASE_URL . 'about.php' ?>">О Нас</a></li>
                    <li><a href="">Услуги</a></li>
                    <li>
                        <a href=""><i class="fa-solid fa-user"></i> Кабинет</a>
                        <ul>
                            <li><a href="<?php echo BASE_URL . 'auth.php' ?>">Админ Панель</a></li>
                            <li><a href="">Выход</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>