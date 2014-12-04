<?php namespace Ombu;

Use Str;


Trait SluggableTrait {


	public function setSlugAttribute() {

		$slug = Str::slug($this->name);

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
	

}
