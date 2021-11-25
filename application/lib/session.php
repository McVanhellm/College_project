<?php 

	session_start();

	class session
	{
		static function isAuth($authParams)
		{
			if(isset($_SESSION[$authParams]))
			{
				return $_SESSION[$authParams];
			}
			else return false;
		}

		static function authorization($isAdminAuth = false,$isAuth,$login)
		{
			$_SESSION["isAdminAuth"] = $isAdminAuth;
			$_SESSION["isAuth"] = $isAuth;
			$_SESSION["login"] = $login;
		}

		static function getDate()
		{
			return [
				"isAdminAuth" => $_SESSION["isAdminAuth"],
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