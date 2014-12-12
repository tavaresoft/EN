<?php

class ClothingCategory extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['item_type', 'category_name'];

	protected $table = 'clothing_categories';

}