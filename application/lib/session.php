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

		static function authorization($isAdminAuth = false, $isAuth, $login, $avatar)
		{
			$_SESSION["isAdminAuth"] = $isAdminAuth;
			$_SESSION["themMode"] = false;
			$_SESSION["isAuth"] = $isAuth;
			$_SESSION["login"] = $login;
			$_SESSION["avatar"] = $avatar;
		}

		static function getDate()
		{
			return [
				"isAdminAuth" => $_SESSION["isAdminAuth"],
				"themMode" => $_SESSION["themMode"],
				"isAuth" => $_SESSION["isAuth"],
				"login" => $_SESSION["login"],
				"avatar" => $_SESSION["avatar"],
			];
		}

		static function logout()
		{
			$_SESSION = array();
        	session_destroy();
		}
	}

?>