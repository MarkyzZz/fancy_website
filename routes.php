<?php

use App\Controllers\UsersController;
use App\Controllers\PagesController;


$router->get('', 'PagesController@home');
$router->get('women','PagesController@women');
$router->get('men','PagesController@men');
$router->get('stock','PagesController@stock');
$router->get('contacts', 'PagesController@contacts');
$router->get('login','PagesController@login');
$router->get('register','PagesController@register');

$router->post('register', 'UsersController@register');
$router->post('login','UsersController@login');
