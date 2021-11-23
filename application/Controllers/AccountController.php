<?php 
	
	require_once("application/Core/Controller.php");

	class AccountController extends Controller 
	{
		public function LoginAction()
		{
			$this->view->LoadDesign();
		}

		public function RegisterAction()
		{
			echo "register";
		}
	}

?>