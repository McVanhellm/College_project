<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Авторизация в админ панель</title>
	</head>
	<body>

		<svg  xmlns="http://www.w3.org/2000/svg" >
		    <circle cx="19px" cy="300px" r="300px" fill="#6393DC" />
		</svg>

		<svg  xmlns="http://www.w3.org/2000/svg">
		    <circle cx="200px" cy="420px" r="300px" fill="#699BE5" />
		</svg>

		<div class="parent">
		    <div class="block">
		        <img align="center" src="../vendor/image/logocms.png" alt=""/>
				<form action="login" method="POST">
					<p><input class="text-field__input" type="text" name="login" required placeholder="Логин"></p>
					<p><input class="text-field__input" type="password" name="password" required placeholder="Пароль"></p>
					<?php
						if(isset($args["message"]))
							echo $args["message"];
					?>
					<input class="btn" type="submit" name="aloginbtn" value="Войти"/>
				</form>
		    </div>
		</div>

		<style type="text/css"> 
			<?php echo getRaw("css","login.css"); ?>
		</style>
	</body>
</html>