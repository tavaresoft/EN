<?php

class EventExpensesController extends \BaseController {

	/**
	 * Display a listing of eventexpenses
	 *
	 * @return Response
	 */
	public function index()
	{
		$eventexpenses = Eventexpense::all();

		return View::make('eventexpenses.index', compact('eventexpenses'));
	}

	/**
	 * Show the form for creating a new eventexpense
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('eventexpenses.create');
	}

	/**
	 * Store a newly created eventexpense in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Eventexpense::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Eventexpense::create($data);

		return Redirect::route('eventexpenses.index');
	}

	/**
	 * Display the specified eventexpense.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$eventexpense = Eventexpense::findOrFail($id);

		return View::make('eventexpenses.show', compact('eventexpense'));
	}

	/**
	 * Show the form for editing the specified eventexpense.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$eventexpense = Eventexpense::find($id);

		return View::make('eventexpenses.edit', compact('eventexpense'));
	}

	/**
	 * Update the specified eventexpense in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$eventexpense = Eventexpense::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Eventexpense::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$eventexpense->update($data);

		return Redirect::route('eventexpenses.index');
	}

	/**
	 * Remove the specified eventexpense from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Eventexpense::destroy($id);

		return Redirect::route('eventexpenses.index');
	}

}
