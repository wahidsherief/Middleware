<?php 


/**
 * Dashboard Controller
 */
class DashboardController extends Controller
{
	
	function __construct()
	{ 
		parent::__construct();

		/**
		 * call the middleware function 
		 * 
		 * @param string redirect path name if user is a guest.
		 * 
		 */
		$this->middleware("login");
		
		$this->view->render('dashboard');
	}
}