<?php 

	function getName()
	{

	}
	
	function getMark($string)
	{
		if(strpos($string, 'Статья') !== false) echo "<div class='marks mark-article unselectable'>Статья</div>";
		if(strpos($string, 'Ошибка') !== false) echo "<div class='marks mark-warning unselectable'>Ошибка</div>";
		if(strpos($string, 'Авторская статья') !== false) echo "<div class='marks mark-Authorship unselectable'>Авторская статья</div>";
		if(strpos($string, 'Информация портала') !== false) echo "<div class='marks mark-info unselectable'>Информация портала</div>";
	}

?>