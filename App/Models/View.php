<?php

namespace App\Models;
/**
* 
*/
class View
{
	
	public function home($argument)
	{
		include('../Views/home.php');
	}

	public function login($argument)
	{
		include('../Views/login.php');
	}

	public function restore($argument)
	{
		include('../Views/restore.php');
	}

	public function register($argument)
	{
		include('../Views/register.php');
	}
}