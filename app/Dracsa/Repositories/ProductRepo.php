<?php namespace Dracsa\Repositories;

use Dracsa\Entities\Product;
use Dracsa\Entities\Brand;
use Dracsa\Entities\Productattribute;
use Dracsa\Entities\Productstock;

class ProductRepo extends BaseRepo {

    public function getModel()
    {
        return new Product;
    }

    public function findProduct()
    {
        return Product::with(['productstocks', 'productstocks.product','brand','genre'])->paginate(5);
    }

      public function findProductstock()
    {
        return Productstock::with(['product', 'product.productstocks'])->paginate(15);
    }

    public function findBrand($id)
    {
        return Product::with(['brand','productstocks','productstocks.color','productstocks.size','productattributes.attributes','productimages'])->where('brand_id', '=', $id)->paginate(13);

        // return Product::join('productimages', function ($join)
        // {
        //     $join->on('');
        // });


        // return Product::with(['brand','ps.color','ps.size','productattributes.attributes','productimages'])
        // ->join('productstocks as ps','ps.product_id','=','products.id')
        // ->join('productimages as pi','pi.product_id','=','products.id')
        // ->where('brand_id', '=', $id)->get();
        // return Product::select('products.*','productimages.*','productstocks.*')
        //     ->join('productimages','products.id','=','productimages.product_id')
        //     ->join('productstocks','products.id','=','productstocks.product_id')
        //     ->get();
    }

    public function findGenre($id)
    {
        return Product::with(['genre','productstocks.color','productstocks.size','productattributes.attributes'])->whereIn('genre_id',array($id,1))->paginate(10);
// ->whereIn('id', array(1, 2, 3))
    }

        public function newProduct()
    {
        $product = new Product();
        return $product;
    }



} 