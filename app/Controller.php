<?php

namespace app;

use Twig\Extra\Intl\IntlExtension;

/***
https://twig.symfony.com/doc/3.x/
site da biblioteca de template, para mais detalhes acessa o site
**/

class Controller
{
	public function view ($viewName,$viewData = array())
	{
		try{
			extract($viewData);

			$loader = new \Twig\Loader\FilesystemLoader('../Views/');
			$twig = new \Twig\Environment($loader);
			$twig->addExtension(new IntlExtension());

			$template = $twig->load($viewName.'.php');

			$run = $template->render($viewData);

			echo $run;

		} catch(Exception $e) {
			throw new Exception("Erro de Template");
			
		}
	}
}