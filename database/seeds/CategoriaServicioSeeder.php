<?php
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;


class CategoriaServicioSeeder extends BaseSeeder {

	public function __construct (){

		$this->table = 'categoria_servicios';
		$this->filename = app_path().'/csv/categoria_servicios.csv'; 

	}

	public function run()
	{
		DB::table($this->table)->delete();
		$seedData = $this->seedFromCSV($this->filename, ';');
		DB::table($this->table)->insert($seedData);


	}
    

}
