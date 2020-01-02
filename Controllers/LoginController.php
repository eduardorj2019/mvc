<?php 

namespace Controllers;

use app\Controller;
use Models\User;

class LoginController extends Controller
{	
	public function index()
	{	
		$data = [];

		return $this->view('login',$data);
	}

	
}