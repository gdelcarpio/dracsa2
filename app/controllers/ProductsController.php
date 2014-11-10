<?php

// use HireMe\Repositories\CategoryRepo;
use Dracsa\Entities\Product;
use Dracsa\Entities\Productstock;
use Dracsa\Repositories\ProductRepo;
use Dracsa\Repositories\ProductimageRepo;
use Dracsa\Repositories\BrandRepo;
use Dracsa\Repositories\ProductstockRepo;
use Dracsa\Repositories\ColorRepo;
use Dracsa\Repositories\SizeRepo;
use Dracsa\Managers\ProductManager;
use Dracsa\Managers\ProductimageManager;
use Dracsa\Managers\ProductstockManager;

class ProductsController extends BaseController {

    protected $productRepo;
    protected $brandRepo;
    protected $productstockRepo;
    protected $product;

    public function __construct(ProductRepo $productRepo,ProductimageRepo $productimageRepo,Productstock $productstock,ProductstockRepo $productstockRepo,BrandRepo $brandRepo, ColorRepo $colorRepo, SizeRepo $sizeRepo)
    {
        $this->productRepo = $productRepo;
        $this->productimageRepo = $productimageRepo;
        $this->productstock = $productstock;
        $this->brandRepo = $brandRepo;
        $this->productstockRepo = $productstockRepo;
        $this->colorRepo = $colorRepo;
        $this->sizeRepo = $sizeRepo;
    }

    public function product($id)
    {
        $brands = $this->brandRepo->all();
        $product = $this->productRepo->find($id);

        $this->notFoundUnless($product);

        return View::make('product', compact('product','brands'));
    }

    public function products()
    {
        // $products = $this->productRepo->all();
        $products = $this->productRepo->findProduct();

        return View::make('products', compact('products'));
    }

    public function brand($id)
    {
        $brands = $this->brandRepo->all();
        $products = $this->productRepo->findBrand($id);
        //  $first = $this->productimageRepo->getFirstImage($product_id,$color_id);
        // if (!$first) {
        //     $first = $this->productimageRepo->newProductimage();
        //     $first->path = 'default.jpg';
        // }
        return View::make('products',compact('products','brands'));
    }

    public function genre($value)
    {
        $brands = $this->brandRepo->all();
        // $genre = $this->productRepo->findgenre($value);
        $products = $this->productRepo->findGenre($value);
        // dd($products);
        return View::make('products',compact('products','brands'));
    }

    public function editProductstock($id)
    {
        // $product = $this->productRepo->find($id);
        $productstock = $this->productstockRepo->find($id);

        // $this->notFoundUnless($productstock);
        $colors = $this->colorRepo->getList();
        $sizes = $this->sizeRepo->getList();
        return View::make('admin/product', compact('productstock','colors', 'sizes'));
    }

    public function productstock($id)
    {
        // $product = $this->productRepo->find($id);
        $brands = $this->brandRepo->all();
        $productstock = $this->productstockRepo->find($id);
        $this->notFoundUnless($productstock);

        $product_id = $productstock->product_id;
        $color_id = $productstock->color_id;
        $first = $this->productimageRepo->getFirstImage($product_id,$color_id);
        if (!$first) {
            $first = $this->productimageRepo->newProductimage();
            $first->path = 'default.jpg';
        }
        // $this->notFoundUnless($first);
        $colors = $this->colorRepo->getList();
        $sizes = $this->sizeRepo->getList();
        return View::make('productstock', compact('productstock','colors', 'sizes','brands','first'));
    }
    public function updateProductstock(){

        $id = Input::get('id');
        $productstock = $this->productstockRepo->find($id);
        // $productstock = Productstock::getProductstock();
        // $productstock = $this->productstock->getProductstock();
        $manager = new ProductstockManager($productstock, Input::all());

        $manager->save();

        return Redirect::route('admin');
    }

    public function updateProduct(){

        $id = Input::get('id');
        $product = $this->productRepo->find($id);
        // $product = Product::getProduct();
        // $product = $this->product->getProduct();
        $manager = new ProductManager($product, Input::all());

        $manager->save();

        return Redirect::route('product_groups');
    }

    public function registerProduct()
    {
        $product = $this->productRepo->newProduct();
        $manager = new ProductManager($product, Input::all());
        $manager->save();
        return Redirect::route('product_groups');
    }

    public function registerProductstock()
    {
        $productstock = $this->productstockRepo->newProductstock();
        $manager = new ProductstockManager($productstock, Input::all());
        $manager->save();
        return Redirect::route('product_group',Input::get('product_id'));
    }

    public function imageProductstockSave()
    {
        $productimage = $this->productimageRepo->newProductimage();
        $manager = new ProductimageManager($productimage, Input::all());

        if(Input::hasFile('path'))
         {
            $img = Image::make(Input::file('path')->getRealPath());
            // $img->resize(300, 200)->response('png');;
            $filename  = time() . '.' . 'jpg';
            $path = public_path('img/' . $filename);
    // save file as png with medium quality
            $img->save($path);
                    // $name = Input::file('path')->getClientOriginalName()
              // Input::file('path')->move('producstock',$name);
         } 
        $manager->save();
        return Redirect::route('product_group',Input::get('product_id'));
    }
} 