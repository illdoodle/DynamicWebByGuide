<!doctype html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>My Blog</title>
</head>
<body>
<header class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h1>
                    <a href="index.php">My Blog</a>
                </h1>
            </div>
            <nav class="col-8">
                <ul>
                    <li><a href="index.php">Главная</a></li>
                    <li><a href="about.php">О Нас</a></li>
                    <li><a href="">Услуги</a></li>
                    <li>
                        <a href=""><i class="fa-solid fa-user"></i> Кабинет</a>
                        <ul>
                            <li><a href="">Админ Панель</a></li>
                            <li><a href="">Выход</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<div class="container">
    <div class="content row">
        <div class="main-content col-md-9 col-12">
            <h2 style="margin: 10px;">О Нас</h2>
            <div class="single-post row">
                <div class="single-post-text col-12 col-md-8" style="margin: 10px; font-size: 1.2em;">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                    Omnis quidem tempora aspernatur hic beatae tempore corrupti. 
                    Neque, odit! Minus quo alias laboriosam fugiat non. 
                    Deleniti quam expedita doloribus nesciunt aspernatur?
                </div>
            </div>
        </div>
    </div>
</div>

<div class="footer container-fluid">
    <div class="footer-content container">
        <div class="row">
            <div class="footer-section about col-md-4 col-12">
                <h3 class="logo-text">Мой блог</h3>
                <p>
                    Мой блог - это блог сделаннный с целью обучения аудитории на платформе
                    YouTube и заработка доволнительной кармы)).
                </p>
                <div class="contact">
                    <i class="fas fa-phone"></i><span> 123-456-789</span> <br>
                    <i class="fas fa-envelope"></i><span> info@myblog.com</span>
                </div>
                <div class="socials">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>

            <div class="footer-section links col-md-4 col-12">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="">События</a></li>
                    <li><a href="">Команда</a></li>
                    <li><a href="">Упражнения</a></li>
                    <li><a href="">Галерея</a></li>
                </ul>
            </div>

            <div class="footer-section contact-form col-md-4 col-12">
                <h3>Контакты</h3>
                <form action="index.html" method="post" class="contacts">
                    <input type="email" name="email" class="text-input contact-input" placeholder="Your email address...">
                    <textarea rows="4" name="message" class="text-input contact-input" placeholder="Your message..."></textarea>
                    <button type="submit" class="btn btn-big contact-btn">
                        <i class="fas fa-envelope"></i>
                        Отправить
                    </button>
                </form>
            </div>

        </div>

        <div class="footer-bottom">
            &copy; myblog.com | Designed by illdoodle. I guess.
        </div>
    </div>
</div>

</body>
</html>