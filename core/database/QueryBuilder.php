<?php

/**
* Query builder class
*/
class QueryBuilder{
	
	protected $pdo;

	public function __construct(PDO $pdo)
	{
		$this->pdo = $pdo;
	}
	/**
	 * Select all rows 
	 * @param  [string] $table [table name from db]
	 * @return [array of objects][return an instance of pdo]
	 */
	public function selectAll($table){

		$statement = $this->pdo->prepare("select * from $table");

		$statement->execute();
		return $statement->fetchAll(PDO::FETCH_OBJ);
	}
}