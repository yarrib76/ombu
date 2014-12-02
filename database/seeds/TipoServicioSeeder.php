<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;


class TipoServicioSeeder extends BaseSeeder {


	public function __construct (){

		$this->table = 'tipo_servicios';
		$this->filename = app_path().'/csv/tipo_servicios.csv'; 

	}

	public function run()
	{
		DB::table($this->table)->delete();
		$seedData = $this->seedFromCSV($this->filename, ';');
		DB::table($this->table)->insert($seedData);


	}


}
