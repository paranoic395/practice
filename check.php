<?php
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);

$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
if(mb_strlen($login) < 5 || mb_strlen($login) > 32){
	echo "Недопустимая длина логина";
	exit();
} else if (mb_strlen($name) < 2 || mb_strlen($name) > 32){
	echo "Недопустимая длина имени (от 2-х до 32-х символов)";
	exit();
} else if (mb_strlen($pass) < 5 || mb_strlen($pass) > 32){
	echo "Недопустимая длина пароля (от 5-ти до 32-х символов)";
	exit();
} 
$pass = md5 ($pass."sasieirj123");
/* $mysql = new mysqli('localhost','root','root','register-bg');
$mysql -> query ("INSERT INTO `users` (`login`, `pass`, `name`) 
	VALUES('$login', '$pass', '$name')");
$mysql -> close(); */
$servername = "localhost";
$database = "register-bg";
$username = "root";
$password = "root";

// Устанавливаем соединение

$conn = mysqli_connect($servername, $username, $password, $database);

// Проверяем соединение. Отключил для переадресации на главную страницу.
 if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
//echo "Connected successfully"."<br />";
 
$sql = "INSERT INTO `users` (`login`, `pass`, `name`) VALUES ('$login', '$pass', '$name')"; 
 if (mysqli_query($conn, $sql)) {
     // echo "New record created successfully";
} else {
      //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
} 
mysqli_close($conn);
header('Location: undexx.php');
?>