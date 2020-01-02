<?php

namespace Models;

use \app\Model;

class User extends Model
{	
	public function __construct()
	{
		parent::__construct();
		$this->setTable('usuarios'); //metodo para passa qual nome da tabela por Modelo
	}
		
}