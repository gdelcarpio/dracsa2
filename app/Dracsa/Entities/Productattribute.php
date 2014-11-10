<?php namespace Dracsa\Entities;

class Productattribute extends \Eloquent {
	protected $fillable = [];

  public function attributes()
    {
        // return $this->hasMany('Dracsa\Entities\Attribute','attribute_id','id');
        return $this->hasOne('Dracsa\Entities\Attribute','id','attribute_id');
    }

}