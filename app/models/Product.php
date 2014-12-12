<?php

class Product extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [
	'name',
	'type',
	'description',
	'sale',
	'paypal',
	'upcoming',
	'preorder',
	];

	

	protected $table = 'products';





	public function inventoryCheck($size){

		return Inventory::where('item_id', $this->id)->pluck($size);
	}
	

	public function priceCheck($size){

		return Price::where('item_id', $this->id)->pluck($size);
	}
	

	public function costCheck($size){

		return Cost::where('item_id', $this->id)->pluck($size);
	}

	public function sortType($type){

		return Product::where('type', $type)->get();
	}

	public function getPictures(){

		return Picture::where('item_id', $this->id)->get(); 
	}

	public function getFirstType($type){
		return ClothingCategory::where('item_type', $this->$type)->pluck('category_name');
	}

	public function sizeList(){

		return Size::lists('size');
	}



}