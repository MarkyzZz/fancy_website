<?php

namespace App\Core;
	/**
	* Application class that represents a container
	*/
	class App
	{	
		protected static $registry = [];
		
		public static function bind($key, $value)
		{

			static::$registry[$key] = $value;
		}

		public static function get($key){

			if(!array_key_exists($key,static::$registry)){
				throw new Exception("The {$key} has not been found.");
				
			}
			return static::$registry[$key];
		}
	}