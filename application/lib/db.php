<?php 

	class BaseDate
	{

		protected $mysqlConnect;

		public function __construct()
		{
			$profile = require_once("application/Config/db.php");
			$this->mysqlConnect = mysqli_connect($profile['host'], $profile['user'], $profile['pass'], $profile['dbname']);

			if (!($this->mysqlConnect))
				View::Exception(401);
		}

		public function GetDate($query)
		{
			return 1;
		}

		public function SetDate($query)
		{
			
		}
	}

?>