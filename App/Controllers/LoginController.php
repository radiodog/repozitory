<?php

namespace App\Controllers;

use App\Models\View;
/**
* 
*/
class LoginController
{
	
	public function login()
	{
		$argument = 'dfs';
		$view = new View();
		$view->login($argument);
	}

	public function restore()
	{
		$argument = 'dfs';
		$view = new View();
		$view->restore($argument);
	}

	public function register()
	{
		$argument = 'dfs';
		$view = new View();
		$view->register($argument);
	}

	public function home()
	{
		$argument = 'POSHEL NAHUI!';
		$view = new View();
		$view->home($argument);
	}

	public function loginPost()
	{
		$this->home();
		//$name = $_POST[''];
		echo "SOSI";
		var_dump($_POST);
	}
}