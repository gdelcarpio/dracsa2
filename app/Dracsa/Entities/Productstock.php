<?php namespace Dracsa\Entities;

class Productstock extends \Eloquent {
	protected $fillable = ['price','sku','stock','visible','offering_price','starting_offer','ending_offer','color_id','size_id','product_id'];

	public function product(){
		return $this->belongsTo('Dracsa\Entities\Product');
	}
	public function color()
  {
    return $this->hasOne('Dracsa\Entities\Color', 'id', 'color_id');
  }

	public function size()
  {
    return $this->hasOne('Dracsa\Entities\Size', 'id', 'size_id');
  }

  public function getPaginateProductstockAttribute()
  {
    return Productstock::paginate(5);
  }

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