<?php

namespace App\Controllers;
use App\Core\App;
/**
* Users Controlller
*/
class UsersController
{
	
	public function register()
	{

		App::get('database')->insert('users', [
			'first_name' => $_POST['first_name'],
			'last_name'	=> $_POST['last_name'],
			'address'	=> $_POST['address'],
			'city'	=> $_POST['city'],
			'state'	=> $_POST['state'],
			'zip'	=> $_POST['zip'],
			'phone'	=> $_POST['phone'],
			'email'	=> $_POST['email'],
			'password'	=> $_POST['password'],
			'website' => $_POST['website'],
		]);

		return redirect('');
	}

	public function login()
	{
		dd($_POST);
	}
}