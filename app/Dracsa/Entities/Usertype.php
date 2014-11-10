<?php namespace Dracsa\Entities;

class Usertype extends \Eloquent {
	protected $fillable = [];

	public function user(){
		return $this->belongsToMany('Dracsa\Entities\User');
	}


}