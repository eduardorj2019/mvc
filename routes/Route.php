<?php

/***
https://packagist.org/packages/coffeecode/router
vai na documentação para poder incorporar outras maneiras de configurar as rotas
esse exemplo é básico para uma rota funcionar
**/

use CoffeeCode\Router\Router;
$route = new Router(BASE_URL);

// namespace do controller
$route->namespace('Controllers');
$route->get('/', 'HomeController:index');

$route->dispatch();

