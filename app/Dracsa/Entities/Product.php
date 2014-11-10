<?php namespace Dracsa\Entities;

class Product extends \Eloquent {
	protected $fillable = ['name','description','guarantee','brand_id','genre_id'];

	public function brand()
  {
    return $this->hasOne('Dracsa\Entities\Brand', 'id', 'brand_id');
  }

  public function genre()
  {
    return $this->hasOne('Dracsa\Entities\Genre', 'id', 'genre_id');
  }

  public function productstocks()
  {
    return $this->hasMany('Dracsa\Entities\Productstock');
  }

  public function productattributes()
  {
    return $this->hasMany('Dracsa\Entities\Productattribute');    
  }

  public function productimages()
  {
    // return $this->hasMany('Dracsa\Entities\Productimage');    
    return $this->hasMany('Dracsa\Entities\Productimage','product_id','id');    
  }
  public function productimage()
  {
    // return $this->hasMany('Dracsa\Entities\Productimage');    
    return $this->hasMany('Dracsa\Entities\Productimage','product_id','id')->first();   
  }
  // public function getPaginateProductsAttribute()
  // {
  //   return Product::paginate(5);
  // }

  public function getProductstock()
  {
    $product = $this->product;

    if (is_null ($product))
    {
      $product = new Product();
      $product->id = $this->id;
    }
  }   

}