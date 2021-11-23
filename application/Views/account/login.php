<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Авторизация</title>
</head>
<body>
	<form action="login" method="POST">
		<p>Login</p>
		<p><input type="text" name="login" id="" required></p>
		<p>Пароль</p>
		<p><input type="text" name="password" id="" required></p>
		<p style="color: red">
		<?php if($args != null)
				echo $args['Message'];
		?>
		</p>
		<input type="submit" name="loginbtn" value="Регистрация"/>
	</form>
</body>
</html>