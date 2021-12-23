<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>TestE</title>
	</head>
	<body>
	<?php
	
		$selectedJson = json_decode(getFData("SELECT data FROM tests WHERE id=1")["data"]);

	// Отлавливаем ошибки возникшие при превращении
	switch (json_last_error()) {
		case JSON_ERROR_NONE:
				$data_error = '';
				break;
		case JSON_ERROR_DEPTH:
				$data_error = 'Достигнута максимальная глубина стека';
				break;
		case JSON_ERROR_STATE_MISMATCH:
				$data_error = 'Неверный или не корректный JSON';
				break;
		case JSON_ERROR_CTRL_CHAR:
				$data_error = 'Ошибка управляющего символа, возможно верная кодировка';
				break;
		case JSON_ERROR_SYNTAX:
				$data_error = 'Синтаксическая ошибка';
				break;
		case JSON_ERROR_UTF8:
				$data_error = 'Некорректные символы UTF-8, возможно неверная кодировка';
				break;  
		default:
				$data_error = 'Неизвестная ошибка';
				break;
	}
	// Если ошибки есть, то выводим их
	if($data_error !='') echo $data_error;
	
	$countTask = $selectedJson->count;
	$countTaskInc = 1;

	getContentTask($selectedJson, $countTaskInc);

	function getContentTask($json, $numberTask)
	{
			$taskValue = $json->{"Task$numberTask"}->{"T$numberTask"};
			echo "<h1>".$taskValue->title."</h1>";
			if($taskValue->type == 0)
			{
				$taskAnswer = $taskValue->Answers;
				echo "<form id='task-form-".$numberTask."' style=' display:flex; '>";
				for($i=0; $i < count($taskAnswer); $i++)
				{
						echo "<div><input name='radiobtn-task' id='task-answer-".$i."' type='radio'><label for='task-answer-".$i."'>".$taskAnswer[$i]."</label></div>";
				}
				echo "</form>";
			}
	}
	?>
	</body>
	<style type="text/css"> 
		<?php echo file_get_contents("vendor/css/TestE.css"); ?>
	</style>
	<script>
	</script>
</html>