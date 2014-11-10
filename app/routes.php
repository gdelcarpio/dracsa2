<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

Route::get('users/{id}', ['as' => 'user', 'uses' => 'UsersController@user']);
Route::get('register', ['as' => 'register', 'uses' => 'HomeController@register']);
Route::get('nosotros', ['as' => 'nosotros', 'uses' => 'HomeController@nosotros']);
Route::post('register', ['as' => 'register', 'uses' => 'UsersController@register']);
Route::post('login', ['as' => 'log-in', 'uses' => 'AuthController@login']);
Route::get('account/', ['as' => 'account', 'uses' => 'HomeController@account']);
Route::get('account/edit', ['as' => 'edit_account', 'uses' => 'HomeController@accountEdit']);
Route::put('account/edit', ['as' => 'update_account', 'uses' => 'HomeController@accountUpdate']);
Route::get('account/password', ['as' => 'edit_password', 'uses' => 'HomeController@passwordEdit']);

Route::get('product/{id}', ['as' => 'product', 'uses' => 'ProductsController@product']);
Route::get('productstock/{id}', ['as' => 'productstock', 'uses' => 'ProductsController@productstock']);

Route::get('product/update/{id}', ['as' => 'edit_productstock', 'uses' => 'ProductsController@editProductstock']);
Route::post('product/update/{id}', ['as' => 'update_productstock', 'uses' => 'ProductsController@updateProductstock']);

Route::get('products/', ['as' => 'products', 'uses' => 'ProductsController@products']);
Route::get('products/brand/{id}', ['as' => 'brand', 'uses' => 'ProductsController@brand']);
Route::get('products/genre/{id}', ['as' => 'genre', 'uses' => 'ProductsController@genre']);

Route::get('admin', ['as' => 'admin', 'uses' => 'AdminController@index']);
Route::get('admin/groups', ['as' => 'product_groups', 'uses' => 'AdminController@groups']);
Route::get('admin/group/{id}', ['as' => 'product_group', 'uses' => 'AdminController@group']);
Route::get('admin/group/edit/{id}', ['as' => 'edit_group', 'uses' => 'AdminController@groupEdit']);
Route::put('admin/group/edit/', ['as' => 'update_product_group', 'uses' => 'ProductsController@updateProduct']);

Route::get('admin/product/register', ['as' => 'product_register', 'uses' => 'AdminController@registerProduct']);
Route::post('admin/product/register', ['as' => 'product_register', 'uses' => 'ProductsController@registerProduct']);

Route::get('admin/productstock/register/{id}', ['as' => 'productstock_register', 'uses' => 'AdminController@registerProductstock']);
Route::post('admin/productstock/register/{id}', ['as' => 'productstock_register', 'uses' => 'ProductsController@registerProductstock']);

Route::get('admin/productstock/images/{id}', ['as' => 'images', 'uses' => 'AdminController@imagesProductstock']);
Route::post('admin/productstock/images/{id}', ['as' => 'images_save', 'uses' => 'ProductsController@imageProductstockSave']);

Route::get('logout', ['as' => 'logout', 'uses' => 'AuthController@logout']);

Route::post('/upload', function(){

     if(Input::hasFile('archivo'))
     {
     	$img = Image::make(Input::file('archivo')->getRealPath());
     	$img->resize(300, 200)->response('png');;
     	$filename  = time() . '.' . 'png';
     	$path = public_path('img/' . $filename);
// save file as png with medium quality
		$img->save($path);
		$img = Image::canvas(800, 600, '#ff0000');
		return $img->response();
     			// $name = Input::file('archivo')->getClientOriginalName()
          // Input::file('archivo')->move('producstock',$name);
     }
     // return Redirect::route('home');
});
