<?php 

	class View
	{
		# The class that is responsible for the visual part
		
		public $controller;
		public $design;

		public function __construct($controller, $action)
		{
			$this->controller = $controller;
			$this->design = $action;
		}

		# Uploads the design to the site 	
		# 	$args-> Getting array parameters and connecting these parameters on the page
		public function LoadDesign($args = [])
		{
			extract($args);
			require_once("application/Views/".$this->controller."/".$this->design.".php");
		}

		# Uploads error pages with code
		# 	$code -> code error ( 404 - page not found | 401 - mysql die connect)
		# 	$args-> Getting array parameters and connecting these parameters on the page
		public static function Exception($code)
		{
			require_once("application/Views/Error/".$code.".php");
			exit;
		}
	}	
?>