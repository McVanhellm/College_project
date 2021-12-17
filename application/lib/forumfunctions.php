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

	function getLastTopic($section)
	{
		$lasttopic = getFData("SELECT id,title,autherid,datecreate FROM fthems WHERE section=".$section." order by id desc LIMIT 1");

	    if($lasttopic != null)
	    {
	        $date = getDateTime($lasttopic['datecreate']);
	        
	        echo "<div style='display:flex;'><a href='forum/topic?id=".$lasttopic['id']."'><div class='label'>".substr($lasttopic["title"],0,31)."..."."</div>";
	        echo "<div style='display:flex;' class='sub-text'>".getFData("SELECT login FROM users WHERE id=".$lasttopic['autherid'])["login"]." <p align='right' style='margin-left:auto;'>".$date."</p></div> </a>";
	        echo "<img style='border-radius: 100px; width:40px; height:40px; margin-left:10px; margin-top:2px' src='vendor/avatar/".getFData("SELECT avatar FROM users WHERE id=".$lasttopic['autherid'])["avatar"]."'> </div>";
	    }
	}

	function getRang($level)
	{

		switch ($level) 
		{
			case 1:
				echo "<div align='center' class='account-rang_ rang-ticher_ unselectable'>Учитель</div></div>";
				break;

			case 2:
				echo "<div align='center' class='account-rang_ rang-moderator_ unselectable'>Модератор</div></div>";
				break;

			case 3:
				echo "<div align='center' class='account-rang_ rang-creater_ unselectable'>Разработчик</div></div>";
				break;

			case 4:
				echo "<div align='center' class='account-rang_ rang-spirit_ unselectable'>Призрак</div></div>";
				break;

			case 5:
				echo "<div align='center' class='account-rang_ rang-huan_ unselectable'>Дон-Хуан</div></div>";
				break;

			case -1:
				echo "<div align='center' class='account-rang_ rang-huan_ unselectable'>Местный</div></div>";
				break;
			case -2:
				echo "<div align='center' class='account-rang_ rang-huan_ unselectable'>Гуру</div></div>";
				break;
			case -3:
				echo "<div align='center' class='account-rang_ rang-huan_ unselectable'>Черная луна</div></div>";
				break;

			default:
				echo "<div align='center' class='account-rang_ rang-user_ unselectable'>Новичок</div></div>";
				break;
		}
	}

?>