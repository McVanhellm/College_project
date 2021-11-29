<?php 

	/*
		Admin controller
		by xoheveras(Egor Udovin)
		https://github.com/xoheveras/CMS
	
	*/

	class AdminController extends Controller 
	{
		public function AdminLoginAction()
		{
			$this->view->LoadDesign();
		}

		public function PagesAction()
		{
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
			$this->view->LoadDesign();
		}
	}

?>