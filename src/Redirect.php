<?php 

class Redirect 
{
	public function to($location)
	{
		header('location:'. $location);
		exit;
	}
}