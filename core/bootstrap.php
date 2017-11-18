<?php

use App\Core\App;

App::bind('config', require 'app/config.php');

App::bind(
	'database', new QueryBuilder(Connection::make(App::get('config')['database']))); 

function view($name,$data=[])
{
	extract($data);

	return require "app/views/{$name}.view.php";
}

function redirect($path){

	return header("Location: /{$path}");
}

function dd($value){

	return die(var_dump($value));
}