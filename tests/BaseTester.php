<?php

use Faker\Factory as Faker;
class BaseTester extends TestCase {


	protected $fake;
	protected $veces = 1;

	function __construct(){

		$this->fake = Faker::create('es_ES');

	}

	protected function veces($count){
		$this->veces = $count;
		return $this;

	}

}
