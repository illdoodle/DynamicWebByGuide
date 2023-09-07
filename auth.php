<?php 
include 'app/include/header.php';
?>
<!doctype html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>My Blog</title>
    <style>
        .content {
            margin-top: 15px;
        }
        .form-check-input {
            margin-right: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="content row">
        <form method="post" action="auth.php" class="auth-form">
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Login</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputLogin3" name="login">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" name="email">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" name="password">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck1" name="remember-me">
                        <label class="form-check-label" for="gridCheck1">
                            Remember Me
                        </label>
                    </div>
                </div>
            </div>
            <!-- Если требуется action на эту же страницу то из идей какие то манипуляции с html тегом чтобы тот определял какая кнопка была нажата либо с помощью JS. -->
            <button type="submit" class="btn btn-primary" name="login-button" formaction="<?php echo BASE_URL . 'auth/do_login.php' ?>">Log In</button>
            <button type="submit" class="btn btn-primary" name="registration-button" formaction="<?php echo BASE_URL . 'auth/do_register.php' ?>">Register</button>
        </form>
    </div>
</div>

<?php
include 'app/include/footer.php';
?>

</body>
</html>