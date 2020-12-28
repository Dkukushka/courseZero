<?php require 'logic/db.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <link rel="stylesheet" href="./css/courses.module.css">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <style>
        .profile {
            width: 70px;
            height: 70px;
            border-radius: 50%;
        }

        .pro {
            display: none;
            justify-content: space-between;
            align-items: center;
            width: 190px;
        }

        .edit,
        .logout {
            width: 35px;
            border-radius: 0;
        }

        .edit svg,
        .logout svg {
            fill: brown;
        }
    </style>

</head>

<body>

    <div class="container-course">
        <header class="header">
            <a href="./index.php" class="logo">CourseZero</a>
            <nav class="main-nav">
                <ul class="list">
                    <li class="item"><a href="./index.php" class="item-link">Главная</a></li>
                    <li class="item"><a href="./courses.php" class="item-link">Курсы</a></li>
                    <li class="item"><a href="./playground/editor.php" class="item-link">Песочница</a></li>
                    <li class="item"><a href="https://andreasbm.github.io/web-skills/?compact" class="item-link">Полезные материалы</a></li>
                </ul>
                <a href="./sign_in.php" class="btn-link">Авторизация</a>
            </nav>
            <span class="pro">
                <img class="profile" src="<?php echo $pic[0]; ?>">
                <img class="edit" src="img/edit2.svg">
                <a href="<?php echo 'logout.php'; ?>"> <img class="logout" src="img/logout2.svg"></a>
            </span>
        </header>
        <div class="section">
            <h2 class="title">Что бы вы хотели изучить?</h2>

            <div class="wrap">
                <div class="courseBlock">
                    <img src="./img/cи++.png" alt="c++" />
                    <h4 class="course-name">C++</h4>
                    <a href="#" class="btn">Выбрать</a>
                </div>
                <div class="courseBlock">
                    <img src="./img/javascript.png" alt="java script">
                    <h4 class="course-name">Java script</h4>
                    <a href="<?php echo (isset($_COOKIE['user'])) ? "coursePage.php" : "sign_in.php"; ?>" class="btn">Выбрать</a>
                </div>
                <div class="courseBlock">
                    <img src="./img/питон.png" alt="python">
                    <h4 class="course-name">Puthon</h4>
                    <a href="#" class="btn">Выбрать</a>
                </div>
                <div class="courseBlock">
                    <img src="./img/java.png" alt="java">
                    <h4 class="course-name">Java</h4>
                    <a href="#" class="btn">Выбрать</a>
                </div>
                <div class="courseBlock">
                    <img src="./img/c-sharp.png" alt="c#">
                    <h4 class="course-name">C#</h4>
                    <a href="#" class="btn">Выбрать</a>
                </div>
                <div class="courseBlock">
                    <img src="./img/php-80.png" alt="php">
                    <h4 class="course-name">Php</h4>
                    <a href="#" class="btn">Выбрать</a>
                </div>
                <div class="courseBlock">
                    <img src="./img/html-5.png" alt="html">
                    <h4 class="course-name">Html</h4>
                    <a href="#" class="btn">Выбрать</a>
                </div>
                <div class="courseBlock">
                    <img src="./img/css3.png" alt="css">
                    <h4 class="course-name">Css</h4>
                    <a href="#" class="btn">Выбрать</a>
                </div>
            </div>
        </div>
    </div>
    <?php if (isset($_COOKIE['user']))
        echo '<script src="js/session.js"></script>';
    ?>
</body>

</html>