<?php

/**
* Initialize require controller
*/
class Init
{
	function __construct()
	{
		$url = isset($_GET['url']) ? $_GET['url'] : null;
		$url = rtrim($url, '/');
		$url = filter_var($url, FILTER_SANITIZE_URL);
		$url = explode('/', $url);

		if(empty($url[0]))
		{
			require_once 'controllers/HomeController.php';
			$controller = new HomeController();
			return false;
		}
		else if ($url[0] == 'logout')
		{
			@session_start() ;
			@session_destroy() ;
			Redirect::to('login');
		}

		$controllerName = ucfirst($url[0]).'Controller';
		

		$file = 'controllers/'.$controllerName.'.php';
		

		if (file_exists($file))
		{
			require_once ($file);
			new $controllerName;
		}
		else
		{
 			echo 'error';
		}
	}
}
