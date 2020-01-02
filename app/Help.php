<?php

namespace app;

trait Help
{	
	private $identification;

	protected function table()
	{
		return $this->table;
	}
	protected function conn(): object
	{
		return $this->pdo;
	}

	public function all() :array
	{	
		$query = "SELECT * FROM {$this->table}";
		$sql = $this->pdo->prepare($query);
		$sql->execute();
		return $sql->fetchAll(\PDO::FETCH_OBJ);
	}

	public function save($id = '')
	{
		if (isset($id) && !empty($id)) {
			echo "update";
		} else {
			echo "save";
		}
	}

	public function delete()
	{

	}

	public function authentication($data)
	{
		$query = "SELECT * FROM usuarios WHERE ";
		$count = 1;
		foreach ($data as $key => $value) {

			if (count($data) > $count) {
				$query.= "{$key} = :{$key}";
				$count++;
			} else {
				$query.= " AND {$key} = :{$key}";
			}
		}

		$sql = $this->pdo->prepare($query);
		$this->params($data,$sql);
		$sql->execute();
		if ($sql->rowCount() > 0) {
			$row = $sql->fetch(\PDO::FETCH_OBJ);
			 $this->identification($row->id);
			 return true;
		} else {
			return false;
		}
		

	}

	private function params($data,$sql)
	{
		foreach ($data as $key => $value) {
			$this->param($sql,$key,$value);
		}
	}

	private function param($sql,$key,$value)
	{	
		$sql->bindparam(":{$key}",$value);
			
	}

	public function identification($help)
	{
		$_SESSION['id'] = $help;
	}

}