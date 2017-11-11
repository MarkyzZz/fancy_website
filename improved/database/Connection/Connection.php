<?php

/**
* Database connection class
*/
class Connection
{
	
	public static function make($config)
	{
		try{
			return new PDO(
				$config['connection'].
				$config['dbname'],
				$config['username'],
				$config['password']);
		}
		catch(PDOException $e){
			die($e->getMessage());
		}
	}
}