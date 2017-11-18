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

		return view('women',[
			'product_types' => $product_types,
			'sizes' => $sizes
		]);
	}

	public function men()
	{
		return view('men');
	}

	public function stock()
	{
		return view('stock');
	}

	public function contacts()
	{
		return view('contacts');
	}

	
}