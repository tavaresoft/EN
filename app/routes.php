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

/////




////

Route::get('/sales', function()
{
	return View::make('sales');
});


Route::get('/3quarter', function()
{
	return View::make('3quarter');
});


Route::get('/accessories', function()
{
	return View::make('accessories');
});


Route::get('/hoodies', function()
{
	return View::make('hoodies');
});



Route::get('/tanks', function()
{
	return View::make('tank_t');
});


Route::get('/all', function()
{
	return View::make('all');
});

Route::get('/tryshit', function(){

	return View::make('products.index');
});


Route::get('/saddle', function()
{
	return View::make('saddle');
});

Route::resource('customers', 'CustomersController');

Route::resource('products', 'ProductsController');

Route::resource('events', 'EventsController');



Route::get('/list/products/{type}', array('as' => 'type_sort', 'uses' => 'ProductsController@type'));







Route::model('products', 'Product');
Route::model('inventory', 'Inventory');



Route::get('eloquent', function() {


		$product = Product::all();

		return View::make('products.index')

		->with('products', compact('product'))
		;

			// all the bears (will also return the fish, trees, and picnics that belong to them)

	});
