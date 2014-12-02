<?php
$router->get('/', 'WelcomeController@index');
$router->get('/home', 'HomeController@index');
$router->controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

//Categoria de Servicios
Route::bind('categoriaServicio', function ($slug)
		{

		return Ombu\CategoriaServicio::where('slug', $slug)->first();

		});




$router->resource('categoriaServicio', 'CategoriaServicioController');

