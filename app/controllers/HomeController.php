<?php

use Dracsa\Repositories\BrandRepo;
use Dracsa\Repositories\ProductRepo;
use Dracsa\Repositories\UserRepo;
use Dracsa\Repositories\DepartmentRepo;
use Dracsa\Repositories\ProvinceRepo;
use Dracsa\Repositories\DistrictRepo;
use Dracsa\Entities\User;
use Dracsa\Managers\AccountManager;


class HomeController extends BaseController {

  protected $brandRepo;
  protected $userRepo;
  protected $departmentRepo;

  public function __construct(BrandRepo $brandRepo, UserRepo $userRepo, DepartmentRepo $departmentRepo, ProvinceRepo $provinceRepo, DistrictRepo $districtRepo)
  {
      $this->brandRepo = $brandRepo;
      $this->userRepo = $userRepo;
      $this->departmentRepo = $departmentRepo;
      $this->provinceRepo = $provinceRepo;
      $this->districtRepo = $districtRepo;
  }

	public function index()
	{
		$brands = $this->brandRepo->all();
		return View::make('home',compact('brands'));
	}

	public function account()
	{
		$brands = $this->brandRepo->all();

		// $user = $this->userRepo->find($id);
		$user = Auth::user();

		return View::make('account',compact('user','brands'));

	}

	public function accountEdit()
	{
		$brands = $this->brandRepo->all();
		$departments = $this->departmentRepo->getList();
		$provinces = $this->provinceRepo->getList();
		$districts = $this->districtRepo->getList();
		// $user = $this->userRepo->find($id);
		$user = Auth::user();
		return View::make('account_update',compact('user','brands','departments','provinces','districts'));
	}

  public function accountUpdate(){

      $id = Auth::user()->id;
      $user = $this->userRepo->find($id);
      // $productstock = Productstock::getProductstock();
      // $productstock = $this->productstock->getProductstock();
      $manager = new AccountManager($user, Input::all());

      $manager->save();

      return Redirect::route('account');
  }

  public function login()
  {
		$brands = $this->brandRepo->all();

      return View::make('login',compact('brands'));

  }

    public function nosotros()
  {
    $brands = $this->brandRepo->all();

      return View::make('nosotros',compact('brands'));

  }

  public function register()
  {
		$brands = $this->brandRepo->all();
		$departments = $this->departmentRepo->getList();
		$provinces = $this->provinceRepo->getList();
		$districts = $this->districtRepo->getList();

    return View::make('register',compact('brands','departments','provinces','districts'));

  }



}
