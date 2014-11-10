<?php namespace Dracsa\Entities;

class Brand extends \Eloquent {
	protected $fillable = [];

	public function products(){
		return $this->hasMany('Dracsa\Entities\Product');
	}

	// public function getPaginateBrandsAttribute()
	// {
	// 	return Brand::where('id', $this->id)->paginate(2);
	// }
		 
}