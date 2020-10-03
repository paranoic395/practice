<?php
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING); 
$pass = md5 ($pass."sasieirj123");
$mysql = new mysqli('localhost','root','root','register-bg');

$result = $mysql -> query ("SELECT * FROM `users` WHERE `login` ='$login' AND `pass` = '$pass'");
$user = $result -> fetch_assoc();
if (count($user) == 0) {
 echo "Такой пользователь не найден или пароль неверный. Или у тебя руки трясутся от вчерашней пьянки, мой друг?";
 exit();
}

setcookie('user', $user['name'], time() + 1899,  "/");


/* $mysql -> query ("INSERT INTO `users` (`login`, `pass`, `name`) 
	VALUES('$login', '$pass', '$name')"); */

$mysql -> close();
header('Location: undexx.php');
?>