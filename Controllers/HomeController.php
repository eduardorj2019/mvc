<?php 

namespace Controllers;

use app\Controller;
use Models\User;


class HomeController extends Controller
{	
	use Auth\Auth;	
	
	public function __construct()
	{	
		/***
		** Para coloca autenticação de usuário usa $this->middleware('auth')
		** no metodo construtor, tem que chama use Auth\Auth
		** antes do metodo contrutor assim vai para tela de login
		***/

		$this->middleware('auth');
	}

	public function index()
	{	
		$usuarios = new User;
		$data['dados'] = $usuarios->all();
		
		return $this->view('home',$data);
	}

	
}