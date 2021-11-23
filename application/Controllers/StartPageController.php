<?php 

	class StartPageController extends Controller 
	{
		public function IndexAction()
		{
			$this->view->LoadDesign();
		}
	}

?>