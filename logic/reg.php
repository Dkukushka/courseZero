<?php

require_once 'db.php';

$name = trim($_POST['name']);
$login = trim($_POST['login']);
$pwd = trim($_POST['password']);
$email = trim($_POST['email']);


$login_check = 'SELECT EXISTS(SELECT username FROM users WHERE username = :login)';
$stmt_check = $pdo->prepare($login_check);
$stmt_check->execute([':login' => $login]);

$email_check = 'SELECT EXISTS(SELECT email FROM users WHERE email = :email)';
$stmt_check2 = $pdo->prepare($email_check);
$stmt_check2->execute([':email' => $email]);

if ($stmt_check->fetchColumn()) {
	echo '<script type="text/javascript">
				window.location.href="../sign_up.php";
				window.alert("Пользователь с таким логином уже существует!");
				</script>';
	exit();
} else if ($stmt_check2->fetchColumn()) {
	echo '<script type="text/javascript">
				window.location.href="../sign_up.php";
				window.alert("Пользователь с таким адресом электронной почты уже существует!");
				</script>';
	exit();
} else {

	$pwd = password_hash($pwd, PASSWORD_DEFAULT);
	$sql = 'INSERT INTO users(name, username, email, password) VALUES(:name, :login, :email, :pwd)';
	$params = [':name' => $name, ':login' => $login, ':email' => $email, ':pwd' => $pwd];

	$stmt = $pdo->prepare($sql);
	$stmt->execute($params);
	setcookie("user", $login, time() + 60 * 60 * 24 * 30, "/");
	echo '<script type="text/javascript">
				window.location.href="../index.php";
				window.alert("Вы успешно зарегистрировались!");
				</script>';
}
