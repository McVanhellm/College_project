<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
		<title>Панель администратора</title>
	</head>
	<body class="">

		<div class="Menu-box">
			<div class="Menu-item-box">
				<a href="../"><img class="logo" src="https://raw.githubusercontent.com/xoheveras/CMS/main/vendor/image/logocms.png"></a>
				<ul>
					<li><a href="../admin/panel"><img src="https://raw.githubusercontent.com/xoheveras/CMS/main/cms_vendor/image/stats-chart.png"></a></li>
					<li><a href="../admin/pages"><img src="https://raw.githubusercontent.com/xoheveras/CMS/main/cms_vendor/image/document-sharp.png"></a></li>
					<li><a href="../admin/setting"><img src="https://raw.githubusercontent.com/xoheveras/CMS/main/cms_vendor/image/hammer-sharp.png"></a></li>
				</ul>
			</div>
		</div>
		<div class="item-box">
			<div class="info-box">
				<div class="info-box-box">
					<p class="first-text"><?php echo count(searchPHP()) + count(searchStyleAndJs("css")) + count(searchStyleAndJs("js")); ?></p>
					<p class="sub-text">Кол-во страниц</p>
				</div>
			</div>
			<div class="info-box">
				<div class="info-box-box">
					<p class="first-text">cms v0.1</p>
					<p class="sub-text">Последняя версия</p>
				</div>
			</div>
		</div>
		<style type="text/css"> 
			<?php
				$_SESSION['themMode'] = true;
				if($_SESSION['themMode'])
					echo getRaw("css","panelDark.css"); 
				else
					echo getRaw("css","panelLight.css");
			?>
		</style>
	</body>
</html>