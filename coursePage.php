<?php require 'logic/db.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Courses_Page</title>
  <link rel="stylesheet" href="css/courses.module.css">
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
  <header class="header">
    <a href="index.php" class="logo">courseZero</a>
    <nav class="main-nav">
      <ul class="list">
        <li class="item"><a href="index.php" class="item-link">Главная</a></li>
        <li class="item"><a href="courses.php" class="item-link">Курсы</a></li>
        <li class="item"><a href="playground/editor.php" class="item-link">Песочница</a></li>
        <li class="item"><a href="https://andreasbm.github.io/web-skills/?compact" class="item-link">Полезные
            материалы</a></li>
      </ul>
      <a href="sign_in.php" class="btn-link">Авторизация</a>
      <span class="pro">
        <img class="profile" src="<?php echo $pic[0]; ?>">
        <img class="edit" src="img/edit2.svg">
        <a href="<?php echo 'logout.php'; ?>"> <img class="logout" src="img/logout2.svg"></a>
      </span>
    </nav>
  </header>
  <div class="container">
    <a href="courses.php" class="course-back">
      Назад к курсу</a>
    <div class="coursePage-block">
      <img class="course-poster" src="img/javascript.png" alt="javaScript">
      <div class="course-title">
        <h2>javaScript</h2>
        <p>Изучите все основные функции JavaScript, в том числе сделать свой веб-сайт более интерактивным,
          изменить его содержимое, проверить формы и многое другое.</p>
      </div>
    </div>
    <div class="wrapper">

      <div class="select-box">

        <div class="options-container">

          <div class="option">
            <input type="radio" class="radio" id="introduction" name="category">
            <label for="introduction">Введение</label>
          </div>
          <div class="option">
            <input type="radio" class="radio" id="first-program" name="category">
            <label for="first-program">Cоздание вашего первого javaScript</label>
          </div>
          <div class="option">
            <input type="radio" class="radio" id="comments" name="category">
            <label for="comments">Комментарии</label>
          </div>
          <div class="option">
            <input type="radio" class="radio" id="variables" name="category">
            <label for="variables">Переменные</label>
          </div>
          <div class="option">
            <input type="radio" class="radio" id="data-types" name="category">
            <label for="data-types">Типы данных</label>
          </div>
          <div class="option">
            <input type="radio" class="radio" id="math-operators" name="category">
            <label for="math-operators">Математические операторы</label>
          </div>
          <div class="option">
            <input type="radio" class="radio" id="assignment-operators" name="category">
            <label for="assignment-operators">Операторы присваивания</label>
          </div>
          <div class="option">
            <input type="radio" class="radio" id="data-types" name="category">
            <label for="data-types">Операторы сравнения</label>
          </div>
          <div class="option">
            <input type="radio" class="radio" id="boolean-operators" name="category">
            <label for="boolean-operators">Логические операторы</label>
          </div>
          <div class="option">
            <input type="radio" class="radio" id="string-operators" name="category">
            <label for="string-operators">Строковые операторы</label>
          </div>
          <div class="option">
            <input type="radio" class="radio" id="conditionals-loops" name="category">
            <label for="conditionals-loops">Условные выражения и циклы</label>
          </div>
          <div class="option">
            <input type="radio" class="radio" id="functions" name="category">
            <label for="functions">Функции</label>
          </div>
          <div class="option">
            <input type="radio" class="radio" id="objects" name="category">
            <label for="objects">Обьекты</label>
          </div>
          <div class="option">
            <input type="radio" class="radio" id="functions" name="category">
            <label for="functions">Функции</label>
          </div>
        </div>
        <div class="selected">
          Основы
        </div>
      </div>
    </div>
  </div>
  <script src="js/coursePage.js"></script>
  <?php if (isset($_COOKIE['user']))
    echo '<script src="js/session.js"></script>';
  ?>
</body>

</html>