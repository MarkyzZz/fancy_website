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
	/**
	 * Select all rows where column is equal to a value
	 * @param  string table name
	 * @param  string column name
	 * @return obj
	 */
	public function selectWhere($table,$column,$value)
	{
		$statement = $this->pdo->prepare("select * from $table where $column = :value");

		$statement->execute(array(
			':value' => $value
		));
		return $statement->fetchAll(PDO::FETCH_OBJ);
	}

	/**
	 * Insert into table at specified columns the respective values
	 * @param  [string] $table      table name
	 * @param  array $parameters array containing column names
	 * @return PDO object             returns an array of objects representing rows selected
	 */
	public function insert($table, $parameters)
    {
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );
        
        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters);
        } catch (Exception $e) {
            $e->getMessage();

        }
    }
}