<?php 

	class Controller
	{
		# Class connector view to model

		public $controller;
		public $action;
		public $view;
		public $model;


		public function __construct($controller, $action)
		{
			$this->controller = $controller;
			$this->action = $action;
			$this->view = new View($controller, $action);
			$this->createModel();
		}

		public function createModel()
		{
			$controller = $this->controller."Model";
			require_once("application/Models/".$controller.".php");
			$this->model = new $controller($this->controller,$this->action);
		}
	}

?>