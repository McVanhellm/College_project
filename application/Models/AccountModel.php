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
				/* Input checks */
				if($this->datebase->getdate("SELECT * FROM users WHERE email='".$email."'") != null) return "Пользователь с такой почтой уже существует";
				if(strlen($password) > 35 || strlen($password) < 6) return "Пароль должен быть не менее 6 и не более 35 символов";

				/* Create account */
				$password = md5($password);
				$this->datebase->updatedate("INSERT INTO users (id,login,password,email,avatar) VALUES(NULL,'$login','$password','$email','noimg.png')");

				/* Get user id */
				$userid = $this->datebase->getdate("SELECT id FROM users WHERE login='".$login."'")['id'];

				/* Add achivment row */
				$this->datebase->updatedate("INSERT INTO achievement (id,userid,idachiv,value,fineValue) VALUES(NULL,$userid,1,0,15)");
				# More achivment

				return header("Location: ../account/login");
			}
			else return "Такой аккаунт уже существует";
		}

		public function AuthorizationAccount($login, $password)
		{
			$requst = $this->datebase->getdate("SELECT * FROM users WHERE login='".$login."'");
			if($requst != null)
			{
				if($requst['password'] == md5($password))
				{
					if(session::isAuth("isAuth") != true)
						session::authorization(true,$requst["id"],$login,$requst["avatar"]);
					return header("Location: ../account/home");
				}
				else return "Неверный пароль";
			}
			else return "Неверный логин";
		}
	}
?>