<?php namespace Ombu;

use Illuminate\Database\Eloquent\Model;
Use Ombu\Observers\ModificaSlugObserver;

class TipoServicio extends Model {

	protected $table = 'tipo_servicios';
	protected $fillable = ['nombre', 'descripcion', 'slug'];

	public function categoriaServicio(){

		return $this->belongsTo('Ombu\CategoriaServicio');



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

        TipoServicio::observe(new ModificaSlugObserver);
    }



}
