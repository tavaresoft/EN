<?php

class EventBandsController extends \BaseController {

	/**
	 * Display a listing of eventbands
	 *
	 * @return Response
	 */
	public function index()
	{
		$eventbands = Eventband::all();

		return View::make('eventbands.index', compact('eventbands'));
	}

	/**
	 * Show the form for creating a new eventband
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('eventbands.create');
	}

	/**
	 * Store a newly created eventband in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Eventband::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Eventband::create($data);

		return Redirect::route('eventbands.index');
	}

	/**
	 * Display the specified eventband.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$eventband = Eventband::findOrFail($id);

		return View::make('eventbands.show', compact('eventband'));
	}

	/**
	 * Show the form for editing the specified eventband.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$eventband = Eventband::find($id);

		return View::make('eventbands.edit', compact('eventband'));
	}

	/**
	 * Update the specified eventband in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$eventband = Eventband::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Eventband::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$eventband->update($data);

		return Redirect::route('eventbands.index');
	}

	/**
	 * Remove the specified eventband from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Eventband::destroy($id);

		return Redirect::route('eventbands.index');
	}

}
