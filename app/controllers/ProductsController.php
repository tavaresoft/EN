<?php

class ProductsController extends \BaseController {

	/**
	 * Display a listing of products
	 *
	 * @return Response
	 */
	public function index()
	{
		$products = Product::orderBy('preorder')->get();

		return View::make('products.index', compact('products'));
	}

	public function type($type){

		if($type == 'tee'){
			$type2 = 'tank';
		}else{
			$type2 = $type;
		}


		if($type == 'all'){
		
		$products = Product::orderBy('upcoming')->orderBy('preorder', 'desc')->orderBy('sale', 'desc')->get();
		
		}elseif($type == 'sale'){

		$products = Product::where('sale', '>', '')->orWhere('preorder', '>', '')->orWhere('upcoming', '>', '')->orderBy('upcoming')->orderBy('preorder', 'desc')->orderBy('sale', 'desc')->get();
		
}else{
		
		$products = Product::where('type', $type)->orWhere('type', $type2)->orderBy('upcoming')->orderBy('preorder', 'desc')->orderBy('sale', 'desc')->get();
		
		}


		return View::make('products.index')
		->with('type', $type)
		->with('products', $products);
	}

	/**
	 * Show the form for creating a new product
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('products.create');
	}

	/**
	 * Store a newly created product in storage.
	 *
	 * @return Response
	 */
	public function store()
	{


			if(Input::file('image_1')){
				$newfile = Input::get('name');
				$newfiletype = Input::get('type');
				$file = Input::file('image_1'); // your file upload input field in the form should be named 'file'
				$destinationPath = 'images/';
				$filename = $file->getClientOriginalExtension($file);
				//$extension =$file->getClientOriginalExtension(); //if you need extension of the file
				$newfilename = "$newfile".'_'."$newfiletype".'_1'.".$filename";
				$uploadSuccess = Input::file('image_1')->move($destinationPath, "$newfilename");

			}else{$newfilename = '';}

			if(Input::file('image_2')){
				$newfile2 = Input::get('name');
				$file = Input::file('image_2'); // your file upload input field in the form should be named 'file'
				$destinationPath = 'images/';
				$filename2 = $file->getClientOriginalExtension($file);
				//$extension =$file->getClientOriginalExtension(); //if you need extension of the file
				$newfilename2 = "$newfile2".'_'."$newfiletype".'_2'.".$filename2";
				$uploadSuccess = Input::file('image_2')->move($destinationPath, "$newfilename2");

			}else{$newfilename2 = '';}

			if(Input::file('image_3')){
				$newfile3 = Input::get('name');
				$file = Input::file('image_3'); // your file upload input field in the form should be named 'file'
				$destinationPath = 'images/';
				$filename3 = $file->getClientOriginalExtension($file);
				//$extension =$file->getClientOriginalExtension(); //if you need extension of the file
				$newfilename3 = "$newfile3".'_'."$newfiletype".'_3'.".$filename3";;
				$uploadSuccess = Input::file('image_3')->move($destinationPath, "$newfilename3");

			}else{$newfilename3 = '';}




		$prod = new Product;

		$prod->name = Input::get('name');
		$prod->description = Input::get('description');
		$prod->type = Input::get('type');
		$prod->sale = Input::get('sale');
		$prod->paypal = Input::get('paypal');
		$prod->upcoming = Input::get('upcoming');
		$prod->preorder = Input::get('preorder');

		$prod->save();

		$item_id = $prod->id;

		$inv = new Inventory;

		$inv->item_id = $item_id;
		$inv->xsmall = Input::get('xsmall');
		$inv->small = Input::get('small');
		$inv->medium = Input::get('medium');
		$inv->large = Input::get('large');
		$inv->xlarge = Input::get('xlarge');
		$inv->xxlarge = Input::get('xxlarge');
		$inv->xxxlarge = Input::get('xxxlarge');

		$inv->save();

		$pic = new Picture;

		$pic->item_id = $item_id;
		$pic->image_1 = $newfilename;
		$pic->image_2 = $newfilename2;
		$pic->image_3 = $newfilename3;

		$pic->save();

		$cost = new Cost;

		$cost->item_id = $item_id;
		$cost->xsmall = Input::get('xsmall_cost');
		$cost->small = Input::get('small_cost');
		$cost->medium = Input::get('medium_cost');
		$cost->large = Input::get('large_cost');
		$cost->xlarge = Input::get('xlarge_cost');
		$cost->xxlarge = Input::get('xxlarge_cost');
		$cost->xxxlarge = Input::get('xxxlarge_cost');

		$cost->save();





		$price = new Price;

		$price->item_id = $item_id;
		$price->xsmall = Input::get('xsmall_price');
		$price->small = Input::get('small_price');
		$price->medium = Input::get('medium_price');
		$price->large = Input::get('large_price');
		$price->xlarge = Input::get('xlarge_price');
		$price->xxlarge = Input::get('xxlarge_price');
		$price->xxxlarge = Input::get('xxxlarge_price');

		$price->save();




		return Redirect::route('products.index');
	
	}

	/**
	 * Display the specified product.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{	

		$newid = json_decode($id);
		$product = Product::where('type', $newid->id)->get();

		return View::make('products.show', compact('product'))
		->with('product', $id);
	}

	/**
	 * Show the form for editing the specified product.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$product = Product::find($id);

		return View::make('products.edit', compact('product'));

	}

	/**
	 * Update the specified product in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$product = Product::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Product::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$product->update($data);

		return Redirect::route('products.index');
	}

	/**
	 * Remove the specified product from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Product::destroy($id);

		return Redirect::route('products.index');
	}

}
