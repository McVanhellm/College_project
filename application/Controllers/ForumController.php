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
					"auther" => $this->model->datebase->getdate("SELECT autherid FROM fthems WHERE id=".$_GET['id']),
					"title" => $this->model->datebase->getdate("SELECT title FROM fthems WHERE id=".$_GET['id']),
					"contentHTML" => $this->model->datebase->getdate("SELECT contentHTML FROM fthems WHERE id=".$_GET['id']),
					"mark" => $this->model->datebase->getdate("SELECT mark FROM fthems WHERE id=".$_GET['id']),
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