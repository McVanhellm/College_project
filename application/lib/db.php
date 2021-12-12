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


		# Getting data in base as query	
		# $query -> query (Exemple - SELECT * FROM <table>)
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
		
		# Get all data as query
		# $query -> query (Exemple - SELECT * FROM ....)
		public function getAllDate($query)
		{
			$this->dbConnect();
			$requst = mysqli_query($this->mysqlConnect, $query);
			$rows = mysqli_fetch_all($requst,MYSQLI_ASSOC);
			return $rows;
		}

		
		# Update data
		# $query -> query (Exemple - UPDATE ....)
		public function updateDate($query)
		{
			$this->dbConnect();
			$this->mysqlConnect->query($query);
			$this->mysqlConnect->close();
		}
	}

?>