<?php 

	/*
		Generate IndexController
		by xoheveras(Egor Udovin)
		https://github.com/xoheveras/CMS
	
	*/

	class IndexController extends Controller 
	{
		public function IndexAction()
		{
			$this->view->LoadDesign();
		}
	}

?>