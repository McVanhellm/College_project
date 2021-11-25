<?php 

	// Запуск session
	session_start();

	class session
	{
		static function isAuth()
		{
			if(isset($_SESSION["isAuth"]))
			{
				return $_SESSION["isAuth"];
			}
			else return false;
		}

		static function authorization($login)
		{
			$_SESSION["isAuth"] = true;
			$_SESSION["login"] = $login;
		}

		static function getDate()
		{
			return [
				"isAuth" => $_SESSION["isAuth"],
				"login" => $_SESSION["login"],
			];
		}

		static function logout()
		{
			$_SESSION = array();
        	session_destroy();
		}
	}

?>