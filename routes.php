<?php

use App\Controllers\UsersController;
use App\Controllers\PagesController;


$router->get('', 'PagesController@home');
$router->get('women','PagesController@women');
$router->get('men','PagesController@men');
