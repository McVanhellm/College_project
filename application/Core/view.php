<?php 

	class View
	{
		public $controller;
		public $design = "Layouts/default";

		public function __construct($controller, $action)
		{
			$this->controller = $controller;
			$this->design = $action;
		}

		public function LoadDesign()
		{
			require_once("application/Views/".$this->controller."/".$this->design.".php");
		}
	}	
?>