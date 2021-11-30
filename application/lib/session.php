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

		static function authorization($isAuth, $login, $avatar)
		{
			$_SESSION["themMode"] = false;
			$_SESSION["isAuth"] = $isAuth;
			$_SESSION["login"] = $login;
			$_SESSION["avatar"] = $avatar;
		}

		static function logout()
		{
			$_SESSION = array();
        	session_destroy();
		}
	}

?>