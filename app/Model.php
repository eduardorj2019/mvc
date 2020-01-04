<?php

namespace app;

class Model
{	

	use Help;
	/***
	**@var atributo protegido da class pai
	***/
	protected $pdo;
	private $table;

	public function __construct()
	{
		try {
			$pdo = new \PDO('mysql:dbname='.NAMEDB.';localhost='.HOST.';charset=utf8',USER,PASSWORD,
				array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
			$this->pdo = $pdo;
		} catch (\PDOException $e) {
			throw new \Exception("Error Processing Request".$e->getMessage());
		}
	}

	public function getTable(): object
	{
		return $this->table();
	}

	public function setTable(string $table): void
	{
		$this->table = $table;
	}


}