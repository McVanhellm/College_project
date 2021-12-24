<?php 

	/*
		Admin model
		by xoheveras(Egor Udovin)
		https://github.com/xoheveras/CMS
	
	*/

	class AdminModel extends Model
	{
		public function Authorization($login, $password)
		{
			if($requst != null)
			{
				if($requst['password'] == $password)
				{
					if(session::isAuth() != true)
						session::authorization($login);

					return header("Location: ../account/home");
				}
				return "Wrong password";
			}
			return "Wrong login";
		}

		public function CreatePage($receivedFolder,$receivedController,$receivedAction)
		{
			if(!is_file('vendor/css/'.$receivedAction.'.css'))
				file_put_contents('vendor/css/'.$receivedAction.'.css', "");
			if(!is_file('application/Controllers/'.$receivedController.'Controller.php'))
				file_put_contents('application/Controllers/'.$receivedController.'Controller.php', getRaw("template","controlphp.txt"));
			if(!is_file('application/Models/'.$receivedController.'Model.php'))
				file_put_contents('application/Models/'.$receivedController.'Model.php', getRaw("template","model.txt"));
			if(!is_dir("application/Views/".$receivedFolder))
			{
				mkdir("application/Views/".$receivedFolder);
			}
			file_put_contents('application/Views/'.$receivedFolder.'/'.$receivedAction.'.php', getRaw("template","php.txt"));
		}

		public function CreateTask($json,$taskName,$section)
		{
			$this->datebase->updatedate("INSERT INTO tests (id,title,type,level,data) VALUES(NULL,'$taskName',0,'$section','$json')");
		}
	}	
?>