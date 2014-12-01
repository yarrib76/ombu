<?php namespace Ombu;

use Illuminate\Database\Eloquent\Model;
Use Str;
Use Ombu\Observers\ModificaSlugObserver;

/*
Categorias de Servicios disponibles 
en los talleres
*/

class CategoriaServicio extends Model {

	protected $table = 'categoria_servicios';
	protected $fillable = ['nombre', 'descripcion'];


	public function tipoServicios (){

		return $this->hasMany('Ombu\TipoServicio');

	}

	public function setSlugAttribute() {

		$slug = Str::slug($this->nombre);

		$slugs = static::whereRaw("slug REGEXP '^{$slug}(-[0-9]*)?$'");


		if ($slugs->count() === 0) {

			$this->attributes['slug'] =  $slug;

		}
		else{

			// get reverse order and get first
			$lastSlugNumber = intval(str_replace($slug . '-', '', $slugs->orderBy('slug', 'desc')->first()->slug));

			$this->attributes['slug'] = $slug . '-' . ($lastSlugNumber + 1);
		}

	}

	public static function boot()
	{
		parent::boot();

		CategoriaServicio::observe(new ModificaSlugObserver);
	}


}
