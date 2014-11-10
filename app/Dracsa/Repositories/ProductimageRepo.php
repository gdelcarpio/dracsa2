<?php namespace Dracsa\Repositories;

use Dracsa\Entities\Productimage;

class ProductimageRepo extends BaseRepo {

    public function getModel()
    {
        return new Productimage;
    }

    public function newProductimage()
    {
        $productimage = new Productimage();
        return $productimage;
    }

    public function getFirstImage($product_id,$color_id){
    	return Productimage::where('product_id', '=', $product_id)->first();
    }



} 