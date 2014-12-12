<?php

class EventIncomesController extends \BaseController {

	/**
	 * Display a listing of eventincomes
	 *
	 * @return Response
	 */
	public function index()
	{
		$eventincomes = Eventincome::all();

		return View::make('eventincomes.index', compact('eventincomes'));
	}

	/**
	 * Show the form for creating a new eventincome
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('eventincomes.create');
	}

	/**
	 * Store a newly created eventincome in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Eventincome::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Eventincome::create($data);

		return Redirect::route('eventincomes.index');
	}

	/**
	 * Display the specified eventincome.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$eventincome = Eventincome::findOrFail($id);

		return View::make('eventincomes.show', compact('eventincome'));
	}

	/**
	 * Show the form for editing the specified eventincome.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$eventincome = Eventincome::find($id);

		return View::make('eventincomes.edit', compact('eventincome'));
	}

	/**
	 * Update the specified eventincome in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$eventincome = Eventincome::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Eventincome::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$eventincome->update($data);

		return Redirect::route('eventincomes.index');
	}

	/**
	 * Remove the specified eventincome from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Eventincome::destroy($id);

		return Redirect::route('eventincomes.index');
	}

}
