<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriaServiciosTable extends Migration {

	public function up()
	{
		Schema::create('categoria_servicios', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre');
			$table->string('slug')->unique();
			$table->text('descripcion')->nullable();
			$table->timestamps();
			
		});
	}

	public function down()
	{
		Schema::drop('categoria_servicios');
	}

}
