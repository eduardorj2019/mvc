<?php 

namespace Controllers;

use \app\Controller;
use \Models\User;

class HomeController extends Controller
{
	public function index()
	{	
		
		$data['dados'] = [
							'nome'=>'teste',
							'email'=>'teste@gmail.com'	
						 ];

		return $this->view('home',$data);
	}

	
}