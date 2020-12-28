<?php require_once 'logic/db.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/script.js" defer></script>
    <title>Registration Page</title>

</head>

<body>
    <div class="container sign-up-mode">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="logic/auth.php" class="sign-in-form" method="post">
                    <h2 class="title">Добро пожаловать на <br />
                        <h1>CourseZero </h1>
                    </h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="login" placeholder="Логин" required>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Пароль" required>
                    </div>
                    <input type="submit" value="Войти" class="btn solid">

                    <p class="social-text"> Или войти с помощью соц сети</p>

                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                    </div>
                </form>

                <form action="logic/reg.php" class="sign-up-form" name="regForm" method="post">
                    <h2 class="title">Регистрация</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="name" placeholder="Имя" required>
                        <i class="fas fa-check" style="visibility: hidden;"></i>
                        <i class="fas fa-exclamation-circle" style="visibility: hidden;"></i>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="login" pattern="^[a-zA-Z0-9]([._-](?![._-])|[a-zA-Z0-9]){1,18}[a-zA-Z0-9]$" placeholder="Логин" maxlength="50" required>
                        <i class="fas fa-check" style="visibility: hidden;"></i>
                        <i class="fas fa-exclamation-circle" style="visibility: hidden;"></i>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" placeholder="Электронная почта" required>
                        <i class="fas fa-check" style="visibility: hidden;"></i>
                        <i class="fas fa-exclamation-circle" style="visibility: hidden;"></i>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Пароль" minlength="8" maxlength="20" required>
                        <i class="fas fa-check" style="visibility: hidden;"></i>
                        <i class="fas fa-exclamation-circle" style="visibility: hidden;"></i>
                    </div>
                    <input type="submit" name="sign up" value="Зарегистрироваться" class="btn solid">

                    <p class="social-text"> Или войти с помощью соц сети</p>

                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                    </div>
                </form>

            </div>
        </div>


        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Впервые здесь ?</h3>
                    <p>Хочешь на онлайн курсы тогда смело зарегистрируйся и учись!</p>
                    <button class="btn transparent" id="sign-up-btn">Зарегистрироваться</button>
                </div>

                <img src="img/register.svg" alt="" class="image">
            </div>

            <div class="panel right-panel">
                <div class="content">
                    <h3>Уже зарегистрировался ?</h3>
                    <p>Тогда введи логин и пароль и смело заходи в свой личный кабинет!</p>
                    <button class="btn transparent" id="sign-in-btn">Войти</button>
                </div>

                <img src="img/log.svg" alt="" class="image">
            </div>
        </div>
    </div>
    <script>

    </script>
</body>

</html>