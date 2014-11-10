<?php
use Dracsa\Repositories\ProductRepo;
use Dracsa\Repositories\ProductstockRepo;
use Dracsa\Repositories\BrandRepo;
use Dracsa\Repositories\GenreRepo;
use Dracsa\Repositories\ColorRepo;
use Dracsa\Repositories\SizeRepo;
use Dracsa\Entities\Product;
use Dracsa\Entities\Productstock;

class AdminController extends BaseController {

  protected $productRepo;
  protected $productstockRepo;
  protected $genreRepo;
  protected $brandRepo;
  protected $colorRepo;
  protected $sizeRepo;

  public function __construct(ProductstockRepo $productstockRepo,ProductRepo $productRepo,BrandRepo $brandRepo,GenreRepo $genreRepo,ColorRepo $colorRepo,SizeRepo $sizeRepo)
  {
    $this->productstockRepo = $productstockRepo;
    $this->productRepo = $productRepo;
    $this->brandRepo = $brandRepo;
    $this->genreRepo = $genreRepo;
    $this->colorRepo = $colorRepo;
    $this->sizeRepo = $sizeRepo;
  }

	public function index()
	{
		// $productstocks = $this->productstockRepo->all();
    $productstocks = $this->productRepo->findProductstock();
    return View::make('admin/home', compact('productstocks'));
  }

  public function groups()
  {
    $products = $this->productRepo->findProduct();
    return View::make('admin/product_groups', compact('products'));

  }

  public function group($id)
  {
    $productstocks = $this->productstockRepo->findProduct($id);
    $product = $this->productRepo->find($id);
    $this->notFoundUnless($productstocks);
    $this->notFoundUnless($product);
    return View::make('admin/product_group', compact('productstocks','product'));

  }

  public function groupEdit($id)
  {
    $product = $this->productRepo->find($id);
    $genres = $this->genreRepo->getList();
    $brands = $this->brandRepo->getList();
    return View::make('admin/product_group_update', compact('product','brands','genres'));
  }

  public function registerProduct()
  {
    $genres = $this->genreRepo->getList();
    $brands = $this->brandRepo->getList();
    return View::make('admin/product_group_register', compact('brands','genres'));
  }

  public function registerProductstock($id)
  {
    $product = $this->productRepo->find($id);
    $this->notFoundUnless($product);
    $colors = $this->colorRepo->getList();
    $sizes = $this->sizeRepo->getList();
    return View::make('admin/product_register', compact('colors','sizes','product'));
  }

  public function imagesProductstock($id)
  {
    $productstock = $this->productstockRepo->find($id);
    return View::make('admin/product_images',compact('productstock'));
  }
}
