<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoServiciosTable extends Migration {

	public function up()
	{
		Schema::create('tipo_servicios', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre');
			$table->string('slug')->unique();
			$table->text('descripcion')->nullable();
			$table->timestamps();
			$table->integer('categoria_servicio_id')->unsigned();
			$table->foreign('categoria_servicio_id')->references('id')->on('categoria_servicios')->onDelete('cascade');
			
		});
	}

	public function down()
	{
		Schema::drop('tipo_servicios');
	}

}
