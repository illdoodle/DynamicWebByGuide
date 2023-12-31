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

<?php 
include 'app/include/header.php';
?>

<div class="container">
    <div class="row">
        <h2 class="slider-title">Топ Публикации</h2>
    </div>
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/Tire.png" class="d-block w-100" alt="Tire.png">
                <div class="carousel-caption d-none d-md-block">
                    <h5><a href="">First slide label</a></h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/DoublePizdec.png" class="d-block w-100" alt="DoublePizdec.png">
                <div class="carousel-caption d-none d-md-block">
                    <h5><a href="">Second slide label</a></h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/Chasiki.png" class="d-block w-100" alt="Chasiki.png">
                <div class="carousel-caption d-none d-md-block">
                    <h5><a href="">Third slide label</a></h5>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<div class="container">
    <div class="content row">
        <div class="main-content col-md-9 col-12">
            <h2>Последние Публикации</h2>
            <div class="post row">
                <div class="img col-12 col-md-4">
                    <img src="images/Chasiki.png" alt="Chasiki.png" class="img-thumbnail">
                </div>
                <div class="post-text col-12 col-md-8">
                    <h2>
                        <a href="singlePost.php">Заголовок</a>
                    </h2>
                    <i class="far fa-user">Имя Автора</i>
                    <i class="far fa-calendar">01.01.1111</i>
                    <p class="preview-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, repudiandae. 
                        Suscipit adipisci quos recusandae dolor ex, quae in aspernatur incidunt.
                    </p>
                </div>
            </div>
            <div class="post row">
                <div class="img col-12 col-md-4">
                    <img src="images/Chasiki.png" alt="Chasiki.png" class="img-thumbnail">
                </div>
                <div class="post-text col-12 col-md-8">
                    <h2>
                        <a href="singlePost.php">Заголовок</a>
                    </h2>
                    <i class="far fa-user">Имя Автора</i>
                    <i class="far fa-calendar">01.01.1111</i>
                    <p class="preview-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, repudiandae. 
                        Suscipit adipisci quos recusandae dolor ex, quae in aspernatur incidunt.
                    </p>
                </div>
            </div>
        </div>
        <div class="sidebar col-md-3 col-12">
            <div class="section search">
                <h3>Search</h3>
                <form action="index.php" method="post">
                    <input type="text" name="search-term" class="text-input" placeholder="Search...">
                </form>
            </div>
            <div class="section topics">
                <h3>Topics</h3>
                <ul>
                    <li><a href="">Perms</a></li>
                    <li><a href="">Quotes</a></li>
                    <li><a href="">Fiction</a></li>
                    <li><a href="">Biography</a></li>
                    <li><a href="">Motivation</a></li>
                    <li><a href="">Inspiration</a></li>
                    <li><a href="">Life Lessons</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php
include 'app/include/footer.php';
?>

</body>
</html>