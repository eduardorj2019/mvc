<?php

namespace app;

include_once '../routes/Route.php';

class App
{
	public function boot()
	{
		$url = isset($_GET['route']) ? explode('/',$_GET['route'])[0] : 'home';
		$url = ucfirst($url);
		$url .= 'Controller';
		$path = '\Controllers\\';
		
		if (file_exists('../Controllers/'.$url.'.php')) {
			$prefix = $path.$url;
			$c = new $prefix();
		} else {
			echo "404";
		}		

	}
}