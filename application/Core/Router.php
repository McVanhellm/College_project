<?php 

	class Router
	{
		protected $routes;
		protected $routesPath = [];
		protected $routesParams = [];

		function __construct()
		{
			$this->routes = require_once("application/Config/Routes.php");

			foreach ($this->routes as $key => $value)
			{
				array_push($this->routesParams, $value);
				array_push($this->routesPath, $key);
			}

			$this->checkPage($this->routesPath, $this->routesParams);
		}

		function getPath() 
		{
			$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
			$regex = "@\x2F\w*\x2F@";
			$match = [];

			if(preg_match($regex, $path, $match))
				$path = str_replace($match[0],'',$path);

			return $path;
		}

		function checkPage($routes, $routesParams)
		{
			if(!in_array($this->getPath(), $routes))
				echo "Такой страницы нет";
			else
			{
				$controller = $this->routes[$this->getPath()]['controller'];
				$action = $this->routes[$this->getPath()]['action'];
				return $this->runPage($controller, $action);
			}
		}

		function runPage()
		{
			
		}
	}

?>