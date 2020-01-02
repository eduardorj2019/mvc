<?php

namespace app;

trait Help
{	
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

}