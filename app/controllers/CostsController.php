<?php

class CostsController extends \BaseController {

	/**
	 * Display a listing of costs
	 *
	 * @return Response
	 */
	public function index()
	{
		$costs = Cost::all();

		return View::make('costs.index', compact('costs'));
	}

	/**
	 * Show the form for creating a new cost
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('costs.create');
	}

	/**
	 * Store a newly created cost in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Cost::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Cost::create($data);

		return Redirect::route('costs.index');
	}

	/**
	 * Display the specified cost.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$cost = Cost::findOrFail($id);

		return View::make('costs.show', compact('cost'));
	}

	/**
	 * Show the form for editing the specified cost.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$cost = Cost::find($id);

		return View::make('costs.edit', compact('cost'));
	}

	/**
	 * Update the specified cost in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$cost = Cost::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Cost::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$cost->update($data);

		return Redirect::route('costs.index');
	}

	/**
	 * Remove the specified cost from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Cost::destroy($id);

		return Redirect::route('costs.index');
	}

}
