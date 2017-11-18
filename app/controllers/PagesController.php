<?php

namespace App\Controllers;
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
		return view('women');
	}

	public function men()
	{
		return view('men');
	}

	
}