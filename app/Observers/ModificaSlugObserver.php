<?php namespace Ombu\Observers;

class ModificaSlugObserver {

	public function updating($model)
	{
		$model->slug = "Lo actualizo despues con el nombre";
	}

	public function saving($model)
	{
		
		$model->slug = "Lo actualizo despues con el nombre";
	}



}
