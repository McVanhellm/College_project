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
				<div id="tests-box-list">

				</div>
			</div>
			<div id="content-editor-box">
				<p id="name-select-test" class="gl-text_c"></p>
			</div>
		</div>
		<style type="text/css"> 
			<?php
				if($_SESSION["themMode"])
					echo getRaw("css","pagesDark.css"); 
				else
					echo getRaw("css","pagesLight.css");
			?>

			.selected-type-box
			{
				display: flex;
			}

			.select-task-type
			{

				font-family: Montserrat;
				font-style: normal;
				font-weight: 600;
				font-size: 14px;
				line-height: 55px;

				margin-left: 15px;

				padding-left: 20px;

				margin-left: 20px;
				width: 430px;
				height: 56px;

				padding: 5px;

				color: #848484;

				background-color: #222126;
				border-radius: 0px 0px 5px 5px;
				box-shadow: 0px 4px 17px rgba(0, 0, 0, 0.25);

				border: none;
			}

			#test-box-list-spoiler-content
			{
				margin-top: 29px;
				background-color: #1C1B1F;
				border-radius: 0px 0px 5px 5px;
				padding: 10px;

				font-family: Montserrat;
				font-style: normal;
				font-weight: 600;
				font-size: 15px;
				color: #848484;

				width: 430px;

				height: 30px;

				border: none;
				resize: none;

			}

			details[open]
			{
				margin-bottom: 60px;
			}

			#test-box-list-spoiler textarea
			{
				margin-bottom: 20px;
			}

			#test-box-list-spoiler-title
			{
				width: 234px;
				height: 20px;
				font-family: Montserrat;
				font-style: normal;
				font-weight: 600;
				font-size: 15px;
				line-height: 50px;
				margin-left: 15px;
				color: #848484;
				width: 50%;
			}

			.create-tests-box
			{
				width: 100%;
				display: flex;
				overflow-x: hidden;
			}

			#test-box-list-spoiler
			{
				width: 450px;
				height: 50px;
				background: #222126;
				box-shadow: 0px 4px 17px rgba(0, 0, 0, 0.25);

				margin-left: 13px;
				margin-top: 10px;

				display: flex;
			}

			#tests-box-list
			{
				margin-left: 20px;
				margin-top: 20px;

				padding-top: 5px;

				width: 475px;
				min-height: 725px;
				height: auto;
				background: #222126;
				box-shadow: 0px 4px 17px rgba(0, 0, 0, 0.25);
				border-radius: 5px;
			}

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

			#create-list-test #tests-count, .custom-type-namefile
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

			#create-list-test #tests-count:focus, .select-task-type:focus
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
				width: 475px;

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
			let inputCountTestValue = 0;
			let inputCountTest = document.getElementById('tests-count');
			let nextBtnl1 = document.getElementById('btn-lvl1-next'); nextBtnl1.hidden = true;
			let testsBoxList = document.getElementById('tests-box-list'); testsBoxList.hidden = true;
			let contentEditorBox = document.getElementById("content-editor-box"); contentEditorBox.hidden = true;
			inputCountTest.addEventListener('input', CountTestChange);

			function CountTestChange(e)
			{
				if(!testPlaceholder)
				{
					nextBtnl1.hidden = false;
					fadeIn(document.getElementById('btn-lvl1-next'), 100);
					inputCountTestValue = e.target.value;
				}
				else
				{
					inputCountTestValue = e.target.value;
					testsBoxList.hidden = true;
					while (testsBoxList.firstChild) 
					{
  						testsBoxList.removeChild(testsBoxList.firstChild);
					}
					for (var i = 1; i <= inputCountTestValue; i++)
					{
						testsBoxList.innerHTML += '<details id="test-box-list-spoiler"><summary id="test-box-list-spoiler-title">Тест '+i+'</summary><textarea id="test-box-list-spoiler-content">Информация о тесте...</textarea></details>';
					}
					testsBoxList.hidden = false;
					openEditor(1);
					fadeIn(testsBoxList, 100);
				}
			}

			function CreateTasksList()
			{
				testPlaceholder = true;
				testsBoxList.hidden = false;
				nextBtnl1.hidden = true;

				for (var i = 1; i <= inputCountTestValue; i++)
				{
					testsBoxList.innerHTML += '<details id="test-box-list-spoiler"><summary id="test-box-list-spoiler-title">Тест '+i+'</summary><textarea id="test-box-list-spoiler-content">Информация о тесте...</textarea></details>';
				}

				fadeIn(testsBoxList, 100);
				openEditor(1);
			}

			// 2 level - Create task page
			let editedTask = 1;

			function openEditor(numberTask)
			{
				contentEditorBox.hidden = false;
				fadeIn(contentEditorBox, 100);

				contentEditorBox.innerHTML += '<div class="selected-type-box"><select id="select-task-type-task'+numberTask+'" class="select-task-type"><option value="0">Тест с одиночным выбором</option><option value="1">Тест с множественным выбором</option><option value="2">Задание с диапазоном значений</option><option value="3">Кастомный шаблон</option></select><input id="custom-type-namefile-task'+numberTask+'" class="custom-type-namefile" placeholder="Название кастомного файла"></input></div>';

				document.getElementById("name-select-test").innerHTML = "Вы редактируете: Тест "+numberTask;
			}

		</script>
	</body>
</html>