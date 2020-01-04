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
					'senha'=>$_POST['senha']
				];

		if ($this->validate($data)) {
			
			if ($usuario->authentication($data)) {
				$this->redirect();
			} else {
				$data['with'] = $this->with('danger','Usuário ou senha invalido');
			}		

		} else {
			$data['input'] = $this->input('senha menor que 4 caracteres');
		}

		return $this->view('login',$data);		
	}

	/***
	**@param metodo para validar os dados que vem do login 
	***/
	private function validate(array $request): bool
	{
		if (filter_var($request['email'],FILTER_VALIDATE_EMAIL)) { 

			if (strlen($request['senha']) > 4) {
				return true;
			} else {
				return false;
			}

		} else {
			return false;
		}
	}

	/***
	**@param metodo para destruir sessão
	***/
	public function logout()
	{
		$this->destroySession();
	}
}