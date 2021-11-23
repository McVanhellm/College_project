<?php 

	require_once("application/Core/View.php");

	class Controller
	{
		public $controller;
		public $action;
		public $view;


		public function __construct($controller, $action)
		{
			$this->controller = $controller;
			$this->action = $action;
			$this->view = new View($controller, $action);
		}
	}

?>