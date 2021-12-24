<?php 

	/*
		Admin controller
		by xoheveras(Egor Udovin)
		https://github.com/xoheveras/CMS
	
	*/

	class AdminController extends Controller 
	{
		# The class that is responsible for the performance of the admin panel

		protected $requst;


		# The action that is responsible for launching the authorization 
		# window in the admin panel, all authorization actions take place here
		public function AdminLoginAction()
		{
			if(!isset($_SESSION['alevel'])) return header("Location: ../account/login");
			else if($_SESSION['alevel'] < 3) return header("Location: ../account/login");


			# Check if the user is authorized as an administrator, otherwise a redirect will occur
			if(session::isAuth('isAdminAuth') == true)
				return header("Location: panel");

			$this->requst = ["message" => ""];

			# User data validation
			if(isset($_POST["aloginbtn"]))
			{
				if($_POST['login'] != "root" && $_POST['password'] != "root")
					$this->requst = ["message" => "<div class='warning'><p> Access denied </p></div>"];
				else
				{
					$_SESSION["isAdminAuth"] = true;
					return header("Location: panel");
				}
			}
			# Load design from view folder (Exemple login.php)
			$this->view->LoadDesign($this->requst);
		}

		public function PagesAction()
		{
			if(session::isAuth('isAdminAuth') == false)
				return header("Location: login");

			if(isset($_POST["createPageBtn"]))
			{
				$receivedFolder = strip_tags($_POST['folder']);
				$receivedController = strip_tags($_POST['controller']);
				$receivedAction  = strip_tags($_POST['action']);

				$this->model->CreatePage($receivedFolder,$receivedController,$receivedAction);
			}
			$this->view->LoadDesign();
		}

		public function PanelAction()
		{
			if(session::isAuth('isAdminAuth') == false)
				return header("Location: login");
			
			$this->view->LoadDesign();
		}

		public function CreateTestAction()
		{
			if(session::isAuth('isAdminAuth') == false)
				return header("Location: login");

			if(isset($_GET["json"]))
				$this->model->CreateTask($_GET['json'],$_GET['testname'],$_GET['section']);
				
			$this->view->LoadDesign();
		}
	}

?>