<?php

class InicioTest extends TestCase {

	/**
	 * Busca la pagina de inicio
	 *
	 * @return void
	 */
	public function testBasicExample()
	{
		$response = $this->call('GET', '/');

		$this->assertEquals(200, $response->getStatusCode());
	}

}
