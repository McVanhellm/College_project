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
				<div class="Test-switcher">
					<p class="gl-text_c">Вы редактируете: </p>
					<img id="left-arrow-switcher" onclick="TaskSwitcher(-1);" src="../vendor/image/LeftArrow.png">
					<p id="name-select-test" class="gl-text_c nomargin"></p>
					<img id="right-arrow-switcher" onclick="TaskSwitcher(1);" src="../vendor/image/RightArrow.png">
				</div>
				<div id="content-editor-box-task"></div>
			</div>
		</div>
		<style type="text/css"> 
			<?php
				if($_SESSION["themMode"])
					echo getRaw("css","pagesDark.css"); 
				else
					echo getRaw("css","pagesLight.css");
			?>

			.ask-selected-design
			{
				margin-top: 30px;
				margin-left: 10px;
			}

			.ask-list-answer
			{
				display: flex;
			}

			#editor-type-ziro img
			{
				margin-left: 96%;
				margin-top: 5px;
				margin-bottom: 10px;
				cursor: pointer;
			}

			#editor-type-ziro
			{
				background: #222126;
				box-shadow: 0px 4px 17px rgba(0, 0, 0, 0.25);
				border-radius: 5px;

				min-height: 730px;

				padding: 10px;

				margin-left: 20px;
				margin-top: 20px;
			}

			.Test-switcher { display: flex; }

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

			.ask-answer
			{
				font-family: Montserrat;
				font-style: normal;
				font-weight: 600;
				font-size: 14px;
				line-height: 55px;

				margin-left: 15px;
				margin-top: 10px;

				padding-left: 20px;
				/* identical to box height */


				color: #848484;

				width: 30%;
				height: 57px;

				background: #222126;
				box-shadow: 0px 4px 17px rgba(0, 0, 0, 0.25);
				border-radius: 5px;
				border: none;
			}

			.ask
			{
				font-family: Montserrat;
				font-style: normal;
				font-weight: 600;
				font-size: 14px;
				line-height: 55px;
				margin-top: 10px;
				margin-left: 15px;

				padding-left: 20px;
				/* identical to box height */


				color: #848484;

				width: 90%;
				height: 57px;

				background: #222126;
				box-shadow: 0px 4px 17px rgba(0, 0, 0, 0.25);
				border-radius: 5px;
				border: none;
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

			#create-list-test #tests-count:focus, .select-task-type:focus, .ask:foucus
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

			#left-arrow-switcher, #right-arrow-switcher
			{
				width: 10px;
				height: 15px;

				margin-top: 23px;
				margin-left: 5px;
				margin-right: 5px;

				cursor: pointer;
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
			let testPlaceholder = false; // Параметр отвечающий за то является ли ввод первым ( нужен для появления кнопки далее )
			let inputCountTestValue = 0; // Количество полученных тестов
			let inputCountTest = document.getElementById('tests-count'); // Поле с тестом
			let nextBtnl1 = document.getElementById('btn-lvl1-next'); nextBtnl1.hidden = true;
			let testsBoxList = document.getElementById('tests-box-list'); testsBoxList.hidden = true;
			let contentEditorBox = document.getElementById("content-editor-box"); contentEditorBox.hidden = true; // Отображение редактора
			let contentEditorBoxTask = document.getElementById("content-editor-box-task"); // Поле для дочерних элементов

			// Events
			inputCountTest.addEventListener('input', CountTestChange); // Эвент при вводе кол-в тестов

			// Визуализация тестов при вводе количества 
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
					createEditor(inputCountTestValue);
					testsBoxList.hidden = false;
					fadeIn(testsBoxList, 100);
				}
			}

			// Первоначальное создание тестов
			function CreateTasksList()
			{
				testPlaceholder = true;
				testsBoxList.hidden = false;
				nextBtnl1.hidden = true;

				for (var i = 1; i <= inputCountTestValue; i++)
				{
					testsBoxList.innerHTML += '<details id="test-box-list-spoiler"><summary id="test-box-list-spoiler-title">Тест '+i+'</summary><textarea id="test-box-list-spoiler-content">Информация о тесте...</textarea></details>';
				}

				createEditor(inputCountTestValue);

				fadeIn(testsBoxList, 100);
			}

			// 2 level - Create task page
			let editedTask = 1;

			function TaskSwitcher(value)
			{
				if(value > 0)
				{
					editedTask++;
					document.getElementById("name-select-test").innerHTML = "Тест "+editedTask;

					// Отображение новых элементов и скрытие старых
					if(editedTask-1 != 0)
						document.getElementById("Task-"+(editedTask-1)).hidden = true;

					document.getElementById("Task-"+editedTask).hidden = false;
					document.getElementById("select-task-type-task"+editedTask).addEventListener("change", changeTypeTest);
					
				}
				else if(value < 0)
				{
					// Отображение новых элементов и скрытие старых
					document.getElementById("Task-"+editedTask).hidden = true;
					editedTask--;
					document.getElementById("name-select-test").innerHTML = "Тест "+editedTask;
					document.getElementById("Task-"+editedTask).hidden = false;
					document.getElementById("select-task-type-task"+editedTask).addEventListener("change", changeTypeTest);
				}


				if(editedTask > 1)
					document.getElementById("left-arrow-switcher").hidden = false;
				else
					document.getElementById("left-arrow-switcher").hidden = true;

				if(editedTask != inputCountTestValue)
					document.getElementById("right-arrow-switcher").hidden = false;
				else
					document.getElementById("right-arrow-switcher").hidden = true;

			}

			function newAskAnswer(value)
			{
				let parent = document.querySelector("#ask-list-"+editedTask);
				let elems = parent.children;

				for (let elem of elems) {
					if(elem.id == editedTask+"-Ask-"+value)
						elem.innerHTML += '<input class="ask-answer" placeholder="Текст ответа"></input><input type="radio" class="ask-selected-design" name="ask-selected" value="#">';
				}
			}

			function newAsk(type)
			{
				switch (type)
				{
					case 0:
						let counter = (document.getElementById("ask-list-"+editedTask).querySelectorAll('div .ask-block')).length+1;
						let inputText = "ask-list-"+editedTask;
						document.getElementById(inputText).innerHTML += '<div id="'+editedTask+'-Ask-'+counter+'" class="ask-block"><img onclick="newAskAnswer('+counter+');" src="../vendor/image/add.png"><input class="ask" placeholder="Текст вопроса"></input><div class="ask-list-answer"></div></div>';
					break;
				}
			}

			// Смена режима редактора ( разные тесты )
			function changeTypeTest()
			{
				var selectedObject = document.getElementById("select-task-type-task"+editedTask);
				var selectedItem = selectedObject.value;

				if(selectedItem != 3)
					document.getElementById("custom-type-namefile-task"+editedTask).readOnly = true;
				else
					document.getElementById("custom-type-namefile-task"+editedTask).readOnly = false;

			    switch(selectedItem)
			    {
			    	case '0':
			    		// alert(selectedItem);
			    	break;
			    	case '1':
			    		// alert(selectedItem);
			    	break;
			    	case '2':
			    		// alert(selectedItem);
			    	break;
			    	case '3':
			    		// alert(selectedItem);
			    	break;
			    }
			}

			// Создание разметки редактора тестов
			function createEditor(countTask)
			{
				while (contentEditorBoxTask.firstChild) 
				{
					contentEditorBoxTask.removeChild(contentEditorBoxTask.firstChild);
				}

				contentEditorBox.hidden = false;
				fadeIn(contentEditorBox, 100);

				for (var i = 1; i <= countTask; i++)
				{
					contentEditorBoxTask.innerHTML += '<div id="Task-'+i+'"><div class="selected-type-box"><select id="select-task-type-task'+i+'" class="select-task-type"><option value="0">Тест с одиночным выбором</option><option value="1">Тест с множественным выбором</option><option value="2">Задание с диапазоном значений</option><option value="3">Кастомный шаблон</option></select><input id="custom-type-namefile-task'+i+'" class="custom-type-namefile" placeholder="Название кастомного файла"></input></div><div id="editor-type-ziro"><img onclick="newAsk(0);" src="../vendor/image/add.png"><hr/><div id="ask-list-'+i+'"></div></div></div>';

					if(i > 1)
						document.getElementById("Task-"+i).hidden = true;

					document.getElementById("custom-type-namefile-task"+i).readOnly = true;
				}
				document.getElementById("name-select-test").innerHTML = "Тест "+1;
				document.getElementById("select-task-type-task"+editedTask).addEventListener("change", changeTypeTest);
				TaskSwitcher(0);
			}

		</script>
	</body>
</html>