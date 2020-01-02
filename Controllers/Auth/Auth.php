<?php

namespace Controllers\Auth;

trait Auth 
{
	public function middleware()
	{
		if (isset($_SESSION['id'])) {
			header('Location:'.BASE_URL.'/');
		} else {
			header('Location:'.BASE_URL.'/login');
		}
	}	
}