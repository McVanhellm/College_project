<?php 
	
	// 
	//    Класс в котором происходят перенаправление по сайту
	//

	class Router
	{
		protected $routes;
		protected $routesPath = [];

		function __construct()
		{
			$this->routes = require_once("application/Config/Routes.php");

			foreach ($this->routes as $key => $value)
			{
				array_push($this->routesPath, $key);
			}

			$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
			if (strpos($path, '.png') !== false || strpos($path, '.jpg') !== false || strpos($path, '.gif') !== false) 
			{
				$path = $this->getPath();
				echo file_get_contents($path);
				//require_once($path);
			}
			else
			{
				$this->checkPage($this->routesPath);
			}
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

		function checkPage($routes)
		{
			if(!in_array($this->getPath(), $routes))
			{
				View::Exception(404);
			}
			else
			{
				return $this->runPage($routes);
			}
		}

		function runPage($routes)
		{
			$controller = $this->routes[$this->getPath()]['controller']."Controller";
			$action = $this->routes[$this->getPath()]['action']."Action";

			require_once("application/Controllers/".$controller.".php");
			$pageController = new $controller($this->routes[$this->getPath()]['controller'], $this->routes[$this->getPath()]['action']);
			$pageController->$action();
		}
	}

?>