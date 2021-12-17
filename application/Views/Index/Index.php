<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">

	</head>
	<style>
		<?php echo file_get_contents("vendor/css/Style.css"); ?>
	</style>
	<body>
  		<div class="intro" id="intro">
    	<!--Код на анимации-->
	<div class="header" id="header">
	<div id="mainlogo" class="sing_word"><img src="vendor/image/pushka.png" alt=""></div>
	<input type="Search" id="search">
	<ul>
		<li><a class="navLink" href="account/home">Личный кабинет</a></li>
		<li><a class="navLink" href="ContactHead.html">Разработчики</a></li>
		<li><a class="navLink" href="forum">Форум</a></li>
	</ul>
	</div>
	<div class="content">
 		<div class="smh"> </div> 
	</div>
	<script type="text/javascript">

		<?php echo file_get_contents("vendor/js/JSsector.js"); ?>
		<?php echo file_get_contents("vendor/js/three.min.js"); ?>
		<?php echo file_get_contents("vendor/js/vanta.net.min.js"); ?>
		<?php echo file_get_contents("vendor/js/JSanimation.js"); ?>
	</script>
</body>
</html>