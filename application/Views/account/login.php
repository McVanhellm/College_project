<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../vendor/css/login.css">
	<meta charset="utf-8">
	<title>Авторизация</title>
</head>

<style type="text/css">
	*{
      margin: 0px;
      padding: 0px;
}
svg
{
      width: 500px;
      height: 500px;
      position: absolute;
      top:48.8%;
}
.parent {
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    overflow: auto;
}
.block {
    width: 400px;
    height: 400px;
    position: absolute;
    top: 30%;
    left: 46%;
    margin: -125px 0 0 -125px;
}
.block img{
      padding-left: 40%;
      margin-bottom: 33%;
}
.btn{
      background: #699BE5;
      box-shadow: 0px 4px 17px #699BE5;
      border-radius: 5px;
      width: 320px;
      height: 50px;
      margin-left: 40px;
      border: none;
      font-family: Montserrat;
      font-style: normal;
      font-weight: 600;
      font-size: 23px;
      line-height: 44px;
      cursor: pointer;
      color: #FFFFFF;
      transition: 1s;
}
.btn:hover
{
      transform: scale(0.9);
}
.warning
{
      font-family: Montserrat;
      font-style: normal;
      font-weight: 500;
      font-size: 18px;
      line-height: 22px;
      /* identical to box height */
      padding-bottom: 30px;
      text-align: center;
      color: #E57169;
}
.text-field__input
{
      width: 320px;
      margin-left: 40px;
      margin-bottom: 50px;
      font-family: Montserrat;
      font-style: normal;
      font-weight: 600;
      font-size: 23px;
      line-height: 32px;
      /* identical to box height */
      border: 0;
      border-bottom-width: 3px; /* Толщина линии внизу */
      border-bottom-style: solid; /* Стиль линии внизу */
      border-bottom-color: #7A7979; /* Цвет линии внизу */
      color: #7A7979;
}
.text-field__input::placeholder
{
      opacity: 0.54;
}
.text-field__input:focus
{
      outline: none;
}
.registration{
      margin-top: 5px;
      font-family: Montserrat;
      font-style: normal;
      font-weight: 500;
      font-size: 15px;
      line-height: 22px;
      /* identical to box height */
      cursor: pointer;
      padding-bottom: 30px;
      text-align: center;
      color: #7A7979;
}

a{
      color: #7A7979;
      text-decoration: none;
}

</style>

<body>
	<svg  xmlns="http://www.w3.org/2000/svg" >
	    <circle cx="19px" cy="300px" r="300px" fill="#6393DC" />
	</svg>
	<svg  xmlns="http://www.w3.org/2000/svg">
	    <circle cx="200px" cy="420px" r="300px" fill="#699BE5" />
	</svg>

	<div class="parent">
	    <div class="block">
	        <img align="center" src="../vendor/image/logo.png" alt=""/>
			<form action="login" method="POST">
				<p><input class="text-field__input" type="text" name="login" required placeholder="Логин"></p>
				<p><input class="text-field__input" type="password" name="password" required placeholder="Пароль"></p>
				<?php if($args != null)
					echo "<div class='warning'><p>".$args["Message"]."</p></div>";
				?>
				<input class="btn" type="submit" name="loginbtn" value="Войти"/>
				<div class='registration'>
					<a href="../account/register">У меня нет аккаунта</a>
				</div>
			</form>
	    </div>
	</div>
</body>
</html>