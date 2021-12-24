<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Авторизация</title>
		<meta name="viewport" content="width=device-width, user-scalable=yes">
	</head>
	<body>
		<svg  xmlns="http://www.w3.org/2000/svg"><circle cx="19px" cy="300px" r="300px" fill="#6393DC"/></svg>
		<svg  xmlns="http://www.w3.org/2000/svg"><circle cx="200px" cy="420px" r="300px" fill="#699BE5" /></svg>
		<div class="parent">
		    <div class="block">
		        <img align="center" src="../vendor/image/logo.png" alt=""/>
				<form action="login" method="POST">
					<p><input class="text-field__input" type="text" name="login" required placeholder="Логин"></p>
					<p><input class="text-field__input" type="password" name="password" required placeholder="Пароль"></p>
					<?php if($args != null) echo "<div class='warning'><p>".$args["Message"]."</p></div>"; ?>
					<input class="btn" type="submit" name="loginbtn" value="Войти"/>
					<div class='registration'><a href="../account/register">У меня нет аккаунта</a></div>
				</form>
		    </div>
		</div>
	</body>
	<style type="text/css"> 
		<?php echo file_get_contents("vendor/css/login.css"); ?>
	</style>
</html>