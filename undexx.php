<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Форма регистрации</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
	<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
	<h5 class="h51"> Место, куда тебя не звали, но послали. <span class="let">WELCOME</span>.</h5>
	<div class="container mt-5">
		<?php
		if ($_COOKIE['user'] == ''):

		?>
		<div class="row">
			<div class="col">
			<h1>Форма регистрации</h1>
		<form action="check.php" method="post">
		<input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"> <br>
		<input type="text" class="form-control" name="name" id="name" placeholder="Введите имя"> <br>
		<input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"> <br>
		<button class="btn btn-succes" type="submit">Зарегистрироваться</button>
		</form>	
			</div>
		<div class="col2">
			<h1 class="hnum1">Форма Авторизации</h1>
		<form action="auth.php" method="post">
		<input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"> <br>
		<input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"> <br>
		<button class="btn btn-succes" type="submit">Авторизоваться</button>
		</form>	
	   </div>
	   <?php else: ?>
	   	<p> Привет ёпта, <?=$_COOKIE['user']?>. Чтобы выйти ткни <a href="/exit.php"> сюда </a></p>
	<?php endif;

	?>
		</div>
	</div>
</body>
</html>	