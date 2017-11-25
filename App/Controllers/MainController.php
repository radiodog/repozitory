<?php

namespace App\Controllers;

use App\Models\View;
/**
* 
*/
class MainController
{
	public function home()
	{
		$argument = 'POSHEL NAHUI!';
		$view = new View();
		$view->home($argument);
	}
}