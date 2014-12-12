<?php

class EventTypesController extends \BaseController {

	/**
	 * Display a listing of eventtypes
	 *
	 * @return Response
	 */
	public function index()
	{
		$eventtypes = Eventtype::all();

		return View::make('eventtypes.index', compact('eventtypes'));
	}

	/**
	 * Show the form for creating a new eventtype
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('eventtypes.create');
	}

	/**
	 * Store a newly created eventtype in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Eventtype::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Eventtype::create($data);

		return Redirect::route('eventtypes.index');
	}

	/**
	 * Display the specified eventtype.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$eventtype = Eventtype::findOrFail($id);

		return View::make('eventtypes.show', compact('eventtype'));
	}

	/**
	 * Show the form for editing the specified eventtype.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$eventtype = Eventtype::find($id);

		return View::make('eventtypes.edit', compact('eventtype'));
	}

	/**
	 * Update the specified eventtype in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$eventtype = Eventtype::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Eventtype::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$eventtype->update($data);

		return Redirect::route('eventtypes.index');
	}

	/**
	 * Remove the specified eventtype from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Eventtype::destroy($id);

		return Redirect::route('eventtypes.index');
	}

}
