<?php

	/*
		ForumController
		by xoheveras(Egor Udovin)
		https://github.com/xoheveras/CMS
	
	*/

	class ForumController extends Controller 
	{
		public function mainAction()
		{
			$this->requst = [
				"topics" => $this->model->datebase->getAlldate("SELECT * FROM fthems"),
			];
			$this->view->LoadDesign($this->requst);
		}

		public function topicAction()
		{

			if(isset($_GET["id"]))
			{
				$this->requst = [
					"topicInfo" => $this->model->datebase->getdate("SELECT * FROM fthems WHERE id=".$_GET['id']),
				];
				$this->view->LoadDesign($this->requst);
			}
			else $this->view->Exception(404);
		}

		public function lkAction()
		{
			return;
		}
	}

?>