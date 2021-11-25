<?php 

	class Model
	{
		# The class in which all calculations are performed
		
		public $controller;
		public $action;
		public $datebase;

		public function __construct($controller, $action)
		{
			$this->controller = $controller;
			$this->action = $action;
			$this->datebase = new BaseDate();
		}
	}

?>