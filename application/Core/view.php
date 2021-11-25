<?php 

	class View
	{
		# The class that is responsible for the visual part

		public $controller;
		public $design = "Layouts/default";

		public function __construct($controller, $action)
		{
			$this->controller = $controller;
			$this->design = $action;
		}

		public function LoadDesign($args = [])
		{
			extract($args);
			require_once("application/Views/".$this->controller."/".$this->design.".php");
		}

		public static function Exception($code)
		{
			require_once("application/Views/Error/".$code.".php");
			exit;
		}
	}	
?>