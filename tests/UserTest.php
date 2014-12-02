<?php

use Ombu\User;


class UserTest extends BaseTester {


	public function testBuscaUsuarios()
	{

		//arrange
		$this->veces(5)->crearUsuario();

		//act


		//assert


		//$response = $this->call('GET', 'tipoServicio');
		//$this->assertEquals(200, $response->getStatusCode());
	}

	private function crearUsuario(){


		while($this->veces--){

			$usuario = new User();
			$usuario->name = $this->fake->name;
			$usuario->password = $this->fake->password;
			$usuario->email = $this->fake->email;
			$usuario->save();
		}

	}

}
