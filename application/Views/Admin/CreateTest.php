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

		<!-- Модальное окно -->
		<div id="openModal" class="modal">
			<div class="bg-modal"></div>
			<div class="modal-box">
				<div onclick="ModalSave(0)" class="colse-modal">X</div>
				<div class="gl-text_c modal-label">Для сохранения выберите секцию</div>
				<select id="select-section" class="modal-select-section">
					<option value="1">Механика ( PhysLab )</option>
					<option value="2">Молекулярная физика ( PhysLab )</option>
					<option value="3">Элект. и магнетизм ( PhysLab )</option>
					<option value="4">Оптика ( PhysLab )</option>
					<option value="5">Атомная физика ( PhysLab )</option>
					<option value="6">Ядерная физика ( PhysLab )</option>
				</select>
				<input id="name-test-save" type="text" name="">
				<div onclick="SaveTest()" class="modal-save-btn">Сохранить</div>
			</div>
		</div>
		<!-- Конец модаьного окна -->

		<!-- Меню -->
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

		<!-- Переключатель -->
		<?php
			if(isset($args["isCreate"]))
			{


				echo '
					<div class="test-create-finaly">
						<p class="gl-text_c">Тест был успешно создан!</p>
						<img src="../vendor/image/fine.gif">
					</div>
				';
			}
			else
			{
				echo '<div class="create-tests-box">
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
							<img id="right-arrow-switcher" onclick="TaskSwitcher(1);" src="../vendor/image/RightArrow.png"><br>
							<div onclick="ModalSave(1)" class="gl-text_c">Сохранить</div>
						</div>
						<div id="content-editor-box-task"></div>
					</div>
				</div>';
			}
		?>
		<style type="text/css"> 
			<?php
				if($_SESSION["themMode"])
					echo getRaw("css","pagesDark.css"); 
				else
					echo getRaw("css","pagesLight.css");
			?>

			.test-create-finaly img
			{
				margin-left: 20px;
			}

			.test-create-finaly
			{
				margin-left: 35%;
				margin-top: 15%;
			}

			.modal-save-btn
			{
				margin-top: 15px;
				width: 200px;
				height: 40px;
				margin-left: 20px;
				background: #699BE5;
				box-shadow: 0px 4px 17px #699BE5;
				border-radius: 5px;

				font-family: Montserrat;
				font-style: normal;
				font-weight: 600;
				font-size: 20px;
				line-height: 44px;

				text-align: center;

				cursor: pointer;

				color: #FFFFFF;
			}

			.modal-select-section
			{
				margin-left: 20px;
			}

			.bg-modal
			{
				background: #222126;
				opacity: 0.8;
				height: 100vh;
			}

			.modal-box
			{

				position: absolute;

				top: 0;
			    left: 0;
			    right: 0;

			    margin-left: 35%;
			    margin-top: 20%;

				opacity: 1;

				width: 500px;
				height: 150px;

				background: #222126;
				box-shadow: 0px 4px 17px rgba(0, 0, 0, 0.25);
				border-radius: 5px;
			}

			.modal
			{
			    position: absolute;
			    top: 0;
			    left: 0;
			    right: 0;
			    opacity: 0;
			}

			.ask-selected-design
			{
				margin-top: 30px;
				margin-left: 10px;
			}

			.ask-list-answer
			{
				display: flex;
			}

			.editor-type-ziro img
			{
				margin-left: 96%;
				margin-top: 5px;
				margin-bottom: 10px;
				cursor: pointer;
			}

			.editor-type-ziro
			{
				background: #222126;
				box-shadow: 0px 4px 17px rgba(0, 0, 0, 0.25);
				border-radius: 5px;

				min-height: 710px;
				max-width: 920px;

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

			.test-box-list-spoiler-content
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


			.modal-label
			{
				margin-top: 0;
				cursor: pointer;
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

			// Постепенное появление блока ( opacity 0 -> 1 )
			function fadeIn(el, speed) 
			{
			  var step = 1 / speed;
			  var interval = setInterval(function() 
			  {
			    if (+el.style.opacity >= 1)
			      clearInterval(interval);
			      
			    el.style.opacity = +el.style.opacity + step;
			  }, speed / 1000);
			}

			// 1 level - Генерация каркаса тестов

			// region Params
			let isFirstInput = false; // Параметр отвечающий за то является ли ввод первым ( нужен для появления кнопки далее )
			let countTest = 0; // Количество полученных тестов
			let countTestDoom = document.getElementById('tests-count'); // Поле с тестом
			let nextButton = document.getElementById('btn-lvl1-next');
			let testsBoxList = document.getElementById('tests-box-list');
			let contentEditorBox = document.getElementById("content-editor-box"); // Отображение редактора
			let contentEditorBoxTask = document.getElementById("content-editor-box-task"); // Поле для дочерних элементов
			let modalSaveWin = document.getElementById("openModal");

			// Hide div
			nextButton.hidden = true;
			testsBoxList.hidden = true;
			contentEditorBox.hidden = true;
			modalSaveWin.hidden = true;
			// endregion

			// Events
			countTestDoom.addEventListener('input', CountTestChange); // Эвент при вводе кол-в тестов

			// Визуализация тестов при вводе количества 
			function CountTestChange(e)
			{
				if(!isFirstInput)
				{
					nextButton.hidden = false;
					fadeIn(document.getElementById('btn-lvl1-next'), 100);
					countTest = e.target.value;
				}
				else
				{
					countTest = e.target.value;
					testsBoxList.hidden = true;
					while (testsBoxList.firstChild) 
					{
  						testsBoxList.removeChild(testsBoxList.firstChild);
					}
					for (var i = 1; i <= countTest; i++)
					{
						testsBoxList.innerHTML += '<details id="test-box-list-spoiler"><summary id="test-box-list-spoiler-title">Тест '+i+'</summary><textarea id="title-gtest-'+i+'" class="test-box-list-spoiler-content">Информация о тесте...</textarea></details>';
					}
					createEditor(countTest);
					testsBoxList.hidden = false;
					fadeIn(testsBoxList, 100);
				}
			}

			// Первоначальное создание тестов
			function CreateTasksList()
			{
				isFirstInput = true;
				testsBoxList.hidden = false;
				nextButton.hidden = true;

				for (var i = 1; i <= countTest; i++)
				{
					testsBoxList.innerHTML += '<details id="test-box-list-spoiler"><summary id="test-box-list-spoiler-title">Тест '+i+'</summary><textarea id="title-gtest-'+i+'" class="test-box-list-spoiler-content">Информация о тесте...</textarea></details>';
				}

				createEditor(countTest);

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

				if(editedTask != countTest)
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
					{
						let counter = (document.getElementById(editedTask+"-Ask-"+value).querySelectorAll('div .ask-answer')).length+1;
						elem.innerHTML += '<input required class="ask-answer" id="'+editedTask+"-Ask-"+value+"-AskInput-"+counter+'" placeholder="Текст ответа"></input><input type="radio" id="'+editedTask+"-Ask-"+value+"-AskRadio-"+counter+'" class="ask-selected-design" name="answer-task-'+value+'" value="#">';
					}
				}
			}

			function newAsk(type)
			{
				switch (type)
				{
					case 0:
						let counter = (document.getElementById("ask-list-"+editedTask).querySelectorAll('div .ask-block')).length+1;
						let inputText = "ask-list-"+editedTask;
						document.getElementById(inputText).innerHTML += '<div id="'+editedTask+'-Ask-'+counter+'" class="ask-block"><img onclick="newAskAnswer('+counter+');" src="../vendor/image/add.png"><input required id="input-Ask-'+editedTask+'-'+counter+'" class="ask" placeholder="Текст вопроса"></input><div class="ask-list-answer"></div></div>';
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


				document.getElementById("editor-type-ziro-"+editedTask).hidden = true;

			    switch(selectedItem)
			    {
			    	case '0':
			    		document.getElementById("editor-type-ziro-"+editedTask).hidden = false;
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
			function createEditor(countTest)
			{
				while (contentEditorBoxTask.firstChild) 
				{
					contentEditorBoxTask.removeChild(contentEditorBoxTask.firstChild);
				}

				contentEditorBox.hidden = false;
				fadeIn(contentEditorBox, 100);

				for (var i = 1; i <= countTest; i++)
				{
					contentEditorBoxTask.innerHTML += '<div id="Task-'+i+'"><div class="selected-type-box"><select id="select-task-type-task'+i+'" class="select-task-type"><option value="0">Тест с одиночным выбором</option><option value="1">Тест с множественным выбором</option><option value="2">Задание с диапазоном значений</option><option value="3">Кастомный шаблон</option></select><input id="custom-type-namefile-task'+i+'" class="custom-type-namefile" placeholder="Название кастомного файла"></input></div><div class="editor-type-ziro" id="editor-type-ziro-'+i+'"><img onclick="newAsk(0);" src="../vendor/image/add.png"><hr/><div id="ask-list-'+i+'"></div></div></div>';

					if(i > 1)
						document.getElementById("Task-"+i).hidden = true;

					document.getElementById("custom-type-namefile-task"+i).readOnly = true;
				}
				document.getElementById("name-select-test").innerHTML = "Тест "+1;
				document.getElementById("select-task-type-task"+editedTask).addEventListener("change", changeTypeTest);
				TaskSwitcher(0);
			}

			// 3 level save

			function ModalSave(value)
			{
				if(value == 0)
				{
					document.getElementById("openModal").hidden = true;
				}
				else
				{
					document.getElementById("openModal").hidden = false;
					fadeIn(document.getElementById("openModal"),100);
				}
			}


			function getAnswer(testNumber,askNumber)
			{
				let answerArray = [];
				let radioArray = [];
				let fineAnswer;
				let counter = (document.getElementById(testNumber+"-Ask-"+askNumber).querySelectorAll('div .ask-answer')).length;

				// Get children div
				for (var i = 1; i <= counter; i++) 
				{
					answerArray.push(document.getElementById(testNumber+"-Ask-"+askNumber+"-AskInput-"+i).value);
					radioArray.push(document.getElementById(testNumber+"-Ask-"+askNumber+"-AskRadio-"+i).checked);
				}

				for (var i = 0; i <= radioArray.length; i++) 
				{
					if(radioArray[i] == true)
						fineAnswer = answerArray[i];
				}

				return { 
					"taskAnswer":answerArray,
					"fineAnswer":fineAnswer
				};
			}

			function SaveTest()
			{
				let select = document.getElementById("select-section");
				let selectedSection = select.querySelector(`option[value="${select.value}"]`).value;
				let newJson = {
					countTest:countTest
				}

				for (var i = 1; i <= countTest; i++) 
				{
					let selectedType = document.getElementById("select-task-type-task"+i).value;
					let countAskInTest = (document.getElementById("ask-list-"+i).querySelectorAll('div .ask-block')).length;
					let newJsonText = {
		    			"testname": "Тест "+i, 
		    			"titile": document.getElementById("title-gtest-"+i).value, 
		    			"taskType": selectedType, 
		    			"countTask": countAskInTest
					}

				    switch(selectedType)
				    {
				    	case '0':
				    		for (var j = 1; j <= countAskInTest; j++) 
				    		{
				    			newJsonText["Ask"+j] = {
				    				"title": document.getElementById("input-Ask-"+i+"-"+j).value,
				    				"Answers": getAnswer(i,j)
				    			}
				    		}			    	
				    	break;
				    	case '1':
				    		newJson["Test"+i] = { "none": null };
				    	break;
				    	case '2':
				    		newJson["Test"+i] = {  "none": null };
				    	break;
				    	case '3':
				    		newJson["Test"+i] = {  "none": null };
				    	break;
				    }

				    newJson["Test"+i] = newJsonText;
				}
				//name-test-save
				window.location.href = '?json='+JSON.stringify(newJson)+"&testname="+document.getElementById("name-test-save").value+"&section="+selectedSection;
			}

		</script>
	</body>
</html>