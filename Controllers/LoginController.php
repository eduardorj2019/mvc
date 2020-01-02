<?php 

namespace Controllers;

use app\Controller;
use Models\User;

class LoginController extends Controller
{	
	use Auth\Auth;

	public function index()
	{	
		$data = [];

		return $this->view('login',$data);
	}

	public function show()
	{	
		$usuario = new User;
		$data = [
					'email'=>$_POST['email'],
					'senha'=>md5($_POST['senha'])
				];

		if ($this->validate($data)) {
			
			if ($usuario->authentication($data)) {
				header('Location:'.BASE_URL.'/');
			} else {
				header('Location:'.BASE_URL.'/login');
			}		

		} else {
			header('Location:'.BASE_URL.'/login');
		}		
	}

	/***
	**@param metodo para validar os dados que vem do login 
	***/
	private function validate($request)
	{
		if (filter_var_array($request,FILTER_VALIDATE_EMAIL)) { 

			if (strlen($request['senha']) < 4) {
				return false;
			} else {
				return true;
			}

		} else {
			return false;
		}
	}

	public function logout()
	{
		$this->destruySession();
	}
}