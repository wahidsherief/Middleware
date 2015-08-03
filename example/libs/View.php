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

	/**
	 * render the view page
	 * @param  string $page page name which is need to require
	 */
	public function render($page)
	{
		require_once ('views/'. $page . '.php');
	}
}
