<?php 

	// 
	//    Класс в котором происходят все основные вычисения сайта
	//

	class Model
	{
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