<?php
$router->get('/', 'WelcomeController@index');
$router->get('/home', 'HomeController@index');
$router->controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
