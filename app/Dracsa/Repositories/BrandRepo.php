<?php namespace Dracsa\Repositories;

use Dracsa\Entities\Brand;
use Dracsa\Entities\Product;

class BrandRepo extends BaseRepo {

    public function getModel()
    {
        return new Brand;
    }

    // public function paginate($int){
    //     return Brand::paginate($int);
    // }

    public function getList()
    {
        return Brand::lists('name', 'id');
    }


    // public function findProduct($id)
    // {
    //     // return Brand::with(['products'])->get();
    // 	return Brand::find($id)->products;
    // 	// return Product::with(['brand', '$id'])->get();
    // }

} 