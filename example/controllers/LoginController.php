<?php


class LoginController extends Controller
{
	
	function __construct() {

		parent::__construct();
		$this->view->render('login');
		
		
		/**
		 * dbconnection
		 */
		$conn=mysql_connect("localhost","root","") or die("not connected");
		mysql_select_db("test_db",$conn) or die("could not find database");

		if (isset($_POST['username']) && isset($_POST['password'] )) 
		{
			$username = $_POST['username'];
			$password = $_POST['password'];

			$sql = "select * from user where name='$username' and password='$password'";
			
			$result = mysql_query($sql);
			
			$count = mysql_num_rows($result);
			
			$row=mysql_fetch_array($result);
			
			if($count > 0)
			{
				Session::init(); // initiate session using session class
				Session::set('true', true); // set session true
				Redirect::to('dashboard'); // redirect to dashboard
			}
			
			else
			{
				Redirect::to('login'); // redirect to login page.
			}
		}
	}
}
?>
