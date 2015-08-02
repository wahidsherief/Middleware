<?php

/**
* Base View Class
*/
class View
{
	public $view;
	
	function __construct()
	{

	}

	public function render($page)
	{
		require_once ('views/'. $page . '.php');
	}
}
