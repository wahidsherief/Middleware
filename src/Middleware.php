<?php

require_once __DIR__ . '/../src/Session.php';
require_once __DIR__ . '/../src/Redirect.php';


/**
* Middleware Class
*/
class Middleware
{
	function __construct($returnTo)
	{
		Session::init();
		$logged = Session::get('true');
		if ($logged == false) 
		{
			Session::destroy();
			Redirect::to($returnTo);
			exit();
		}
	}
}