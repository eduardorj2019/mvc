<?php

namespace app;

include_once '../routes/Route.php';

class App
{
	public function boot()
	{
		$url = isset($_GET['route']) ? explode('/',$_GET['route'])[1] : 'home';
		$url = ucfirst($url);
		$url .= 'Controller';
		if (!file_exists('../Controllers/'.$url.'.php')) {
			echo "404";
		}				

	}
}