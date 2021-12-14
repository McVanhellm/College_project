<?php 
	function getFData($query)
	{
		$profile__ = include("application/Config/db.php");
		$mysqlConnect = mysqli_connect($profile__['host'], $profile__['user'], $profile__['pass'], $profile__['dbname']);

		if($requst = mysqli_query($mysqlConnect, $query))
		{
			$result = mysqli_fetch_assoc($requst);
			mysqli_free_result($requst);
			$mysqlConnect->close();
			return $result;
		}
		else
			return null;

	}

	function getDateTime($date)
	{
		$second = strtotime(date('Y-m-d H:i:s')) - strtotime($date);

		if($second < 60)
			return $second." секунд назад";
		if($second < 86400)
		{
			if($second < 3600)
			{
				if($second < 120)
					return round(($second/60))." минуту назад";
				if($second > 120 && $second < 240)
					return round(($second/60))." минуты назад";
				if($second > 240)
					return round(($second/60))." минут назад";
			}

			if($second < 7200)
				return round(($second/3600))." час назад";

			if($second < 21600)
				return round(($second/3600))." часа назад";
			else
				return round(($second/3600))." часов назад";
			
		}

		if($second < 172800)
			return round(($second/86400))." день назад";
		else
			return round(($second/86400))." дней назад";
	}

	function getMark($string)
	{
		if(strpos($string, 'Статья') !== false) echo "<div class='marks mark-article unselectable'>Статья</div>";
		if(strpos($string, 'Ошибка') !== false) echo "<div class='marks mark-warning unselectable'>Ошибка</div>";
		if(strpos($string, 'Авторская статья') !== false) echo "<div class='marks mark-Authorship unselectable'>Авторская статья</div>";
		if(strpos($string, 'Информация портала') !== false) echo "<div class='marks mark-info unselectable'>Информация портала</div>";
	}

	function getRang($level)
	{

		switch ($level) 
		{
			case 1:
				echo "<div align='center' class='account-rang_ rang-ticher_'>Учитель</div></div>";
				break;

			case 2:
				echo "<div align='center' class='account-rang_ rang-moderator_'>Модератор</div></div>";
				break;

			case 3:
				echo "<div align='center' class='account-rang_ rang-creater_'>Разработчик</div></div>";
				break;

			case 4:
				echo "<div align='center' class='account-rang_ rang-spirit_'>Призрак</div></div>";
				break;

			case 5:
				echo "<div align='center' class='account-rang_ rang-huan_'>Дон-Хуан</div></div>";
				break;
			
			default:
				echo "<div align='center' class='account-rang_ rang-user_'>Человек</div></div>";
				break;
		}
	}

?>