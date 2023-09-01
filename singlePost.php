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
    <div class="content row">
        <div class="main-content col-md-9 col-12">
            <h2>Заголовок Конкретной Статьи</h2>
            <div class="single-post row">
                <div class="img col-12">
                    <img src="images/Chasiki.png" alt="Chasiki.png" class="img-thumbnail">
                </div>                
                <div class="single-post-text col-12 col-md-8" style="margin: 10px; font-size: 1.2em;">
                    <i class="far fa-user">Имя Автора</i>
                    <i class="far fa-calendar">01.01.1111</i> <br>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                    Omnis quidem tempora aspernatur hic beatae tempore corrupti. 
                    Neque, odit! Minus quo alias laboriosam fugiat non. 
                    Deleniti quam expedita doloribus nesciunt aspernatur?
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