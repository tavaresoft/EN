<?php

class ClothingCategoriesController extends \BaseController {

	/**
	 * Display a listing of clothingcategories
	 *
	 * @return Response
	 */
	public function index()
	{
		$clothingcategories = Clothingcategory::all();

		return View::make('clothingcategories.index', compact('clothingcategories'));
	}

	/**
	 * Show the form for creating a new clothingcategory
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('clothingcategories.create');
	}

	/**
	 * Store a newly created clothingcategory in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Clothingcategory::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Clothingcategory::create($data);

		return Redirect::route('clothingcategories.index');
	}

	/**
	 * Display the specified clothingcategory.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$clothingcategory = Clothingcategory::findOrFail($id);

		return View::make('clothingcategories.show', compact('clothingcategory'));
	}

	/**
	 * Show the form for editing the specified clothingcategory.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$clothingcategory = Clothingcategory::find($id);

		return View::make('clothingcategories.edit', compact('clothingcategory'));
	}

	/**
	 * Update the specified clothingcategory in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$clothingcategory = Clothingcategory::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Clothingcategory::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$clothingcategory->update($data);

		return Redirect::route('clothingcategories.index');
	}

	/**
	 * Remove the specified clothingcategory from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Clothingcategory::destroy($id);

		return Redirect::route('clothingcategories.index');
	}

}
