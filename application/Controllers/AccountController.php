<?php 

	/*
		Controller
		by xoheveras(Egor Udovin)
		https://github.com/xoheveras/CMS
	
	*/

	class AccountController extends Controller 
	{

		protected $requst = [];

		public function LoginAction()
		{
			if(isset($_SESSION["isAuth"]) == true)
				return header("Location: home");

			if(isset($_POST["loginbtn"]))
			{
				$receivedLogin = strip_tags($_POST['login']);
				$receivedPassword = strip_tags($_POST['password']);

				$this->requst = [
					"Message" => $this->model->AuthorizationAccount($receivedLogin,$receivedPassword),
				];
			}
			$this->view->LoadDesign($this->requst);
		}

		public function RegisterAction()
		{
			if(isset($_POST["registerbtn"]))
			{
				$receivedLogin = strip_tags($_POST['login']);
				$receivedPassword = strip_tags($_POST['password']);
				$receivedEmail = strip_tags($_POST['email']);

				$this->requst = [
					"Message" => $this->model->CreateAccout($receivedLogin,$receivedPassword,$receivedEmail),
				];
			}
			$this->view->LoadDesign($this->requst);
		}

		public function HomeAction()
		{
			if($_SESSION["isAuth"] == false)
				return header("Location: login");

			$this->requst = [
				"TestInfo" => $this->model->datebase->getAlldate("SELECT * FROM tests"),
				"Achivment" => $this->model->datebase->getAlldate("SELECT * FROM achievement WHERE id = ".$_SESSION['id']),
			];
			$this->view->LoadDesign($this->requst);
		}
	}

?>