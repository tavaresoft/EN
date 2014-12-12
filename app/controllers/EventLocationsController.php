<?php

class EventLocationsController extends \BaseController {

	/**
	 * Display a listing of eventlocations
	 *
	 * @return Response
	 */
	public function index()
	{
		$eventlocations = Eventlocation::all();

		return View::make('eventlocations.index', compact('eventlocations'));
	}

	/**
	 * Show the form for creating a new eventlocation
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('eventlocations.create');
	}

	/**
	 * Store a newly created eventlocation in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Eventlocation::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Eventlocation::create($data);

		return Redirect::route('eventlocations.index');
	}

	/**
	 * Display the specified eventlocation.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$eventlocation = Eventlocation::findOrFail($id);

		return View::make('eventlocations.show', compact('eventlocation'));
	}

	/**
	 * Show the form for editing the specified eventlocation.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$eventlocation = Eventlocation::find($id);

		return View::make('eventlocations.edit', compact('eventlocation'));
	}

	/**
	 * Update the specified eventlocation in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$eventlocation = Eventlocation::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Eventlocation::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$eventlocation->update($data);

		return Redirect::route('eventlocations.index');
	}

	/**
	 * Remove the specified eventlocation from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Eventlocation::destroy($id);

		return Redirect::route('eventlocations.index');
	}

}
