<?php 

/**
 * Redirect Class
 */

class Redirect 
{
	/**
	 * redirect to the intended page
	 * @param  string $location page name where to redirect.
	 */
	public function to($location)
	{
		header('location:'. $location);
		exit;
	}
}