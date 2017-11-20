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
			'password'	=> password_hash($_POST['password'],PASSWORD_DEFAULT),
			'website' => $_POST['website'],
		]);
			//password_hash("rasmuslerdorf", PASSWORD_DEFAULT);
		return redirect('');
	}

	public function login()
	{

	$user = App::get('database')->selectWhere('users','email',$_POST['email']);
	$password = App::get('database')->selectWhere('users','password',password_hash($_POST['password'],PASSWORD_DEFAULT));

	session_start();

		if(! ( empty($user) && empty($password) )){
			$_SESSION['user'] = $user;
			return redirect('');
		}
		return redirect('login');
	}
	

	public function logout(){

		session_start();

		if(isset($_SESSION['user'])){
			$_SESSION = array();
		}
		session_destroy();

		return redirect('');
	}
}