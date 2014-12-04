<?php

use Ombu\User;


class UserTest extends BaseTester {


	public function testBuscaUsuarios()
	{

		//arrange
		$this->veces(5)->crearUsuario();

		//act


		//assert


		$response = $this->call('GET', 'usuario');
		$this->assertEquals(200, $response->getStatusCode());
	}

	private function crearUsuario(){


		while($this->veces--){

			$usuario = $this->crear();
			$usuario->save();
		}

	}

	private function crear(){



		$usuario = new User();
		$usuario->name = $this->fake->name;
		$usuario->password = $this->fake->password;
		$usuario->email = $this->fake->email;
		return $usuario;

	}
	public function testEliminarUsuario(){

		$usuario = $this->crear();
		$usuario->slug ='23';
		$usuario->save();

		$response = $this->call('GET', 'usuario/' . $usuario->slug);
		$this->assertEquals(200, $response->getStatusCode());


		$usuario->delete();
		$response = $this->call('GET', 'usuario/' . $usuario->slug);
		$this->assertEquals(500, $response->getStatusCode());


	}
	public function testEditarUsuario(){

		$usuario = $this->crear();
		$usuario->slug ='23';
		$usuario->save();

		$response = $this->call('GET', 'usuario/' . $usuario->slug. '/edit');
		$this->assertEquals(200, $response->getStatusCode());
	}


}
