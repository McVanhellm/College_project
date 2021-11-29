<?php 

	/*
		Model
		by xoheveras(Egor Udovin)
		https://github.com/xoheveras/CMS
	
	*/

	class AccountModel extends Model
	{
		public function CreateAccout($login, $password, $email)
		{
			$requst = $this->datebase->getdate("SELECT * FROM users WHERE login='".$login."'");
			if($requst == null)
			{
				$password = md5($password);
				$this->datebase->updatedate("INSERT INTO users (id,login,password,email) VALUES(NULL,'$login','$password','$email')");
				return header("Location: ../account/home");
			}
			else
			{
				return "Такой аккаунт уже существует";
			}
		}

		public function AuthorizationAccount($login, $password)
		{
			$requst = $this->datebase->getdate("SELECT * FROM users WHERE login='".$login."'");
			if($requst != null)
			{
				if($requst['password'] == md5($password))
				{
					if(session::isAuth("isAuth") != true)
						session::authorization(false,true,$login,$requst["avatar"]);

					return header("Location: ../account/home");
				}
				return "Неверный пароль";
			}
			return "Неверный логин";
		}
	}
?>