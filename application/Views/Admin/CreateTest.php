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
					<li><a href="../admin/ctest"><img src="https://raw.githubusercontent.com/xoheveras/CMS/main/cms_vendor/image/hammer-sharp.png"></a></li>
				</ul>
			</div>
		</div>
		<div class="create-tests-box">
			<div id="create-list-test">
				<p class="gl-text_c">Создание теста</p>
				<input id="tests-count" placeholder="Количество тестов"></input>
				<div onclick="CreateTasksList();" id="btn-lvl1-next">Далее</div>
			</div>
		</div>
		<style type="text/css"> 
			<?php
				if($_SESSION["themMode"])
					echo getRaw("css","pagesDark.css"); 
				else
					echo getRaw("css","pagesLight.css");
			?>

			.gl-text_c
			{
				  font-family: Montserrat;
			      font-style: normal;
			      font-weight: 600;
			      font-size: 18px;
			      line-height: 22px;

			      margin-bottom: 10px;

			      color: #848484;

			      margin-top: 20px;
			      margin-left: 20px;
			}

			#create-list-test input
			{
				font-family: Montserrat;
				font-style: normal;
				font-weight: 600;
				font-size: 14px;
				line-height: 55px;

				margin-left: 15px;

				padding-left: 20px;
				/* identical to box height */


				color: #848484;

				width: 460px;
				height: 57px;

				background: #222126;
				box-shadow: 0px 4px 17px rgba(0, 0, 0, 0.25);
				border-radius: 5px;
				border: none;
			}

			#create-list-test input:focus
			{
				outline: none;
			}

			#btn-lvl1-next
			{
				margin-left: 20px;
				margin-top: 20px;

				text-align: center;

				font-family: Montserrat;
				font-style: normal;
				font-weight: 600;
				font-size: 18px;
				line-height: 50px;

				color: #FFFFFF;

				height: 50px;

				background: #6393DC;
				border-radius: 5px;
				cursor: pointer;
				opacity: 0;
			}
		</style>

		<script type="text/javascript">

			// fade func
			function fadeIn(el, speed) {
			  var step = 1 / speed;
			  var interval = setInterval(function() {
			    if (+el.style.opacity >= 1)
			      clearInterval(interval);
			      
			    el.style.opacity = +el.style.opacity + step;
			  }, speed / 1000);
			}

			// 1 level - Generation placeholder them
			let testPlaceholder = false;
			let inputCountTest = document.getElementById('tests-count');
			let nextBtnl1 = document.getElementById('btn-lvl1-next'); nextBtnl1.hidden = true;
			inputCountTest.addEventListener('input', CountTestChange);

			function CountTestChange(e)
			{
				if(!testPlaceholder)
				{
					nextBtnl1.hidden = false;
					fadeIn(document.getElementById('btn-lvl1-next'), 100);
				}
				//e.target.value
			}

		</script>
	</body>
</html>