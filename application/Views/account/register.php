<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Авторизация</title>
</head>
<body>
	<form action="register" method="POST">
		<p>Логин</p>
		<p><input type="text" name="login" id="" required></p>
		<p>Пароль</p>
		<p><input type="password" name="password" id="" required></p>
		<p>Почта</p>
		<p><input type="email" name="email" id="" required></p>
		<p style="color: red">
		<?php if($args != null)
				echo $args['Message'];
		?>
		</p>
		<input type="submit" name="registerbtn" value="Регистрация"/>
	</form>
</body>
</html>