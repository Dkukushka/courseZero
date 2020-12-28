<?php require 'logic/db.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>courseZero</title>
    <link rel="stylesheet" href="css/main.module.css">
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
    </style>
</head>

<body>
    <div class="container">
        <header class="header">
            <a href="index.php" class="logo">CourseZero</a>
            <nav class="main-nav">
                <ul class="list">
                    <li class="item"><a href="index.php" class="item-link">Главная</a></li>
                    <li class="item"><a href="courses.php" class="item-link">Курсы</a></li>
                    <li class="item"><a href="playground/editor.php" class="item-link">Песочница</a></li>
                    <li class="item"><a href="https://andreasbm.github.io/web-skills/?compact" class="item-link">Полезные материалы</a></li>

                </ul>
                <a href="sign_in.php" class="btn-link">Авторизация</a>
            </nav>

            <span class="pro">
                <img class="profile" src="<?php echo $pic[0]; ?>">
                <img class="edit" src="img/edit.svg">
                <a href="<?php echo 'logout.php'; ?>"> <img class="logout" src="img/logout.svg"></a>
            </span>
        </header>

        <div class="main-content">
            <div class="slideshow-container">
                <div class="mySlides fade">
                    <div class="numbertext"></div>
                    <img src="img/hero.jpg" class="poster" alt="">
                    <div class="text">Научитесь программировать</div>
                    <div class="text2">вместе с нами!</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext"></div>
                    <img src="img/coding.png" class="poster" alt="">
                    <div class="text"> </div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext"></div>
                    <img src="img/coding2.png" class="poster" alt="">
                    <div class="text"></div>
                </div>

                <a class="prev" onclick="plusSlides(-1)">&#10094</a>
                <a class="next" onclick="plusSlides(1)">&#10095</a>

            </div>
            <br>
            <div style="text-align:center;">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>
        </div>

        <div class="cards">
            <div class="card card1">
                <div class="card-container">
                    <img src="img/си.jpg" alt="c++">
                </div>
                <div class="details">
                    <h3>C++</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium dignissimos, minus aperiam adipisci exercitationem.</p>
                    <a href="#" class="card-btn">Выберите этот курс</a>
                </div>
            </div>
            <div class="card card2">
                <div class="card-container">
                    <img src="img/жаваскрипт.jpg" height="170px" alt="js">
                </div>
                <div class="details">
                    <h3>Java Script</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium dignissimos, minus aperiam adipisci exercitationem.</p>
                    <a href="#" class="card-btn">Выберите этот курс</a>
                </div>
            </div>
            <div class="card card3">
                <div class="card-container">
                    <img src="img/питон.jpg" height="170px" alt="python">
                </div>
                <div class="details">
                    <h3>Python</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium dignissimos, minus aperiam adipisci exercitationem.</p>
                    <a href="#" class="card-btn">Выберите этот курс</a>
                </div>
            </div>
        </div>
        <h4><a href="courses.php" class="course-link">Посмотреть все наши курсы -></a></h4>
        <footer class="footer">
            <a href="index.php" class="logo">courseZero</a>
            <nav class="footer-nav">
                <ul class="footer-list">
                    <li class="item"><a href="index.php" class="item-link">Главная</a></li>
                    <li class="item"><a href="courses.php" class="item-link">Курсы</a></li>
                    <li class="item"><a href="playground/editor.php" class="item-link">Песочница</a></li>
                    <li class="item"><a href="https://andreasbm.github.io/web-skills/?compact" class="item-link">Полезные материалы</a></li>
                </ul>
            </nav>
            <nav class="secondary-nav">
                <a name="Контакты" class="contacts">
                    <p>Можете с нами связаться <br />с помощью соц сети</p>
                </a>
                <ul class="contacts-nav">
                    <li class="second-item"><a href="" class="item-link"><img src="img/facebook.png" alt="facebook"></a></li>
                    <li class="second-item"><a href="" class="item-link"><img src="img/instagram.png" alt="instagram"></a></li>
                    <li class="second-item"> <a href="" class="item-link"><img src="img/youtube.png" alt="youtube"></a></li>
                    <li class="second-item"><a href="tel:+996702859716" class="item-link"><img src="img/whatsapp.png" alt="whatsapp"></a></li>
                </ul>
            </nav>
        </footer>
    </div>
    <script src="js/main.js"></script>
    <?php if (isset($_COOKIE['user']))
        echo '<script src="js/session.js"></script>';
    ?>

</body>

</html>