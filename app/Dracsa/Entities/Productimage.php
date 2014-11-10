<?php namespace Dracsa\Entities;

class Productimage extends \Eloquent {
	protected $fillable = ['product_id','color_id','path'];

	public function product(){
		return $this->belongsTo('Dracsa\Entities\Product');
	}
}