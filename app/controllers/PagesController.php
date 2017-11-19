<?php

namespace App\Controllers;
use App\Core\App;
/**
*  Pages Controller class
*/
class PagesController
{
	
	public function home()
	{	
		return view('index');
	}

	public function women(){
		$product_types = App::get('database')->selectAll('product_types');
		$sizes = App::get('database')->selectAll('sizes');
		$women = App::get('database')->selectWhere('products','gender','Female');

		return view('women',[
			'product_types' => $product_types,
			'sizes' => $sizes,
			'women' => $women
		]);
	}

	public function men()
	{
		$product_types = App::get('database')->selectAll('product_types');
		$sizes = App::get('database')->selectAll('sizes');
		$men = App::get('database')->selectWhere('products','gender','Male');
		return view('men',[
			'product_types' => $product_types,
			'sizes' => $sizes,
			'men' => $men
		]);
	}

	public function stock()
	{
		return view('stock');
	}

	public function contacts()
	{
		return view('contacts');
	}

	public function login()
	{
		return view('loginpage');
	}

	public function register()
	{
		return view('registration');
	}
	
}