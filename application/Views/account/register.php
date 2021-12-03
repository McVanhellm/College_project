<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Регистрация</title>
		<meta name="viewport" content="width=device-width, user-scalable=yes">
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
		        <img text-align="center" src="../vendor/image/logo.png" alt=""/>
					<form action="register" method="POST">
						<p><input class="text-field__input" type="text" name="login" id="" required placeholder="Логин"></p>
						<p><input class="text-field__input" type="password" name="password" id="" required placeholder="Пароль"></p>
						<p><input class="text-field__input" type="email" name="email" id="" required placeholder="Почта"></p>
						<?php if($args != null)
							echo "<div class='warning'><p>".$args["Message"]."</p></div>";
						?>
						<input class="btn" type="submit" name="registerbtn" value="Регистрация"/>
						<div class='registration'>
						<a href="../account/login">У меня уже есть аккаунта</a>
					</div>
					</form>
				</div>
			</div>
		</body>
	</body>

	<style type="text/css"> 
		<?php echo file_get_contents("vendor/css/login.css"); ?>
	</style>
</html>