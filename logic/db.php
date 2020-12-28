<?php

try {
  $pdo = new PDO("mysql:host=localhost;dbname=course", 'root', 'root');
  // set the PDO error mode to exception
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = 'SELECT avatar FROM users WHERE username = ?';
  $stmt = $pdo->prepare($sql);
  $stmt->execute([$_COOKIE['user']]);
  $pic = $stmt->fetch();
} catch (PDOException $e) {
  die('Не могу подключиться к базе данных');
}
