<?php 

	class BaseDate
	{

		protected $profile;
		protected $mysqlConnect;

		public function __construct()
		{
			$this->profile = require_once("application/Config/db.php");
			$this->dbConnect();
			mysqli_close($this->mysqlConnect);
		}

		public function dbConnect()
		{
			$this->mysqlConnect = mysqli_connect($this->profile['host'], $this->profile['user'], $this->profile['pass'], $this->profile['dbname']);

			if (!($this->mysqlConnect))
				View::Exception(401);
		}

		public function getDate($query)
		{
			$this->dbConnect();

			if($requst = mysqli_query($this->mysqlConnect, $query))
			{
				$result = mysqli_fetch_assoc($requst);
				mysqli_free_result($requst);
				$this->mysqlConnect->close();
				return $result;
			}
			else
				return null;
		}

		public function updateDate($query)
		{
			$this->dbConnect();
			$this->mysqlConnect->query($query);
			$this->mysqlConnect->close();
		}
	}

?>