<?php

require_once 'db.php';

$login = trim($_POST['login']);
$pwd = trim($_POST['password']);

$sql = 'SELECT username, password FROM users 
	WHERE username = :login';
$params = [':login' => $login];

$stmt = $pdo->prepare($sql);
$stmt->execute($params);

$user = $stmt->fetch(PDO::FETCH_OBJ);

if ($user) {
	if (password_verify($pwd, $user->password)) {
		setcookie("user", $login, time() + 60 * 60 * 24 * 30, "/");
		header('Location: ../index.php');
		exit();
	} else {
		echo '<script type="text/javascript">
				window.location.href="../sign_in.php";
				window.alert("Неверный логин или пароль!");
				</script>';
		exit();
	}
} else {
	echo '<script type="text/javascript">
				window.location.href="../sign_in.php";
				window.alert("Неверный логин или пароль!");
				</script>';
	exit();
}
