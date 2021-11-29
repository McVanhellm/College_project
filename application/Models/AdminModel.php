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
			file_put_contents('vendor/css/'.$receivedAction.'.css', "");
			file_put_contents('application/Controllers/'.$receivedController.'.php', getRaw("template","controlphp.txt"));
			file_put_contents('application/Models/'.$receivedController.'.php', getRaw("template","model.txt"));
			if(!is_dir("application/Views/".$receivedFolder))
			{
				mkdir("application/Views/".$receivedFolder);
			}
			file_put_contents('application/Views/'.$receivedFolder.'/'.$receivedAction.'.php', getRaw("template","php.txt"));
		}
	}	
?>