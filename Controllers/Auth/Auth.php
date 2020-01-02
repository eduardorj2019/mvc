<?php

namespace Controllers\Auth;

trait Auth 
{
	public function middleware($value)
	{
		if (empty($_SESSION['id'])) {
			header('Location:'.BASE_URL.'/login');
		}
	}

	public function destruySession()
	{
		if (isset($_SESSION['id'])) {
			unset($_SESSION['id']);
			header('Location:'.BASE_URL.'/login');
			exit;
		}
	}	

}