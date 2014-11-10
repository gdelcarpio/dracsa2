<?php namespace Dracsa\Repositories;

use Dracsa\Entities\Product;
use Dracsa\Entities\Productstock;

class ProductstockRepo extends BaseRepo {

    public function getModel()
    {
        return new Productstock;
    }

    public function findProduct($id)
    {
        return Productstock::with(['product','color','size'])->where('product_id', '=', $id)->paginate(10);
    }

    public function newProductstock()
    {
        $productstock = new Productstock();
        return $productstock;
    }

} 