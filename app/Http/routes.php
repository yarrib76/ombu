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

//Tipo de Servicio
Route::bind('tipoServicio', function ($slug)
		{


		return Ombu\TipoServicio::where('slug', $slug)->first();

		});
$router->resource('tipoServicio', 'TipoServicioController');
		
//Users
Route::bind('usuario', function ($slug)
		{


		return Ombu\User::where('slug', $slug)->first();

		});
$router->resource('usuario', 'UserController');


