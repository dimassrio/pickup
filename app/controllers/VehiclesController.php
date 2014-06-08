<?php

class VehiclesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$this->data['pagetitle1'] = "OUR";
		$this->data['pagetitle2'] = "CARS";
		$this->data['vehicles'] = Vehicle::all();
		return View::make('vehicles.index', $this->data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->data['pagetitle1'] = "DATA";
		$this->data['pagetitle2'] = "MOBIL";
		return View::make('vehicles.create', $this->data);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$vehicle = new Vehicle;
		$vehicle->name = Input::get('name');
		$vehicle->description = Input::get('description');
		$vehicle->passenger = Input::get('passenger');
		$vehicle->price = Input::get('price');
		$vehicle->year = Input::get('year');
		$vehicle->maker_id = Input::get('maker');
		$vehicle->category_id = Input::get('category');
		$vehicle->owner_type = 'user';
		$vehicle->owner_id = 1;

		$file = Input::file('picture');

		$destinationPath = 'assets/uploads/vehicles';
		$filename = date('Ymd').str_random(12);
		$vehicle->main_picture = $destinationPath.'/'.$filename;

		$upload_success = Input::file('picture')->move($destinationPath, $filename);

		if( $upload_success ) {
   			$vehicle->save();
   			return Redirect::intended('administrator/vehicles');
		} else {
   			return Redirect::to('administrator/vehicles/create');
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$this->data['pagetitle1'] = "EDIT";
		$this->data['pagetitle2'] = "KENDARAAN";
		$this->data['vehicle'] = Vehicle::find($id);
		return View::make('vehicles.edit', $this->data);	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$vehicle = Vehicle::find($id);
		$vehicle->name = Input::get('name');
		$vehicle->description = Input::get('description');
		$vehicle->passenger = Input::get('passenger');
		$vehicle->price = Input::get('price');
		$vehicle->year = Input::get('year');
		$vehicle->maker_id = Input::get('maker');
		$vehicle->category_id = Input::get('category');
		$vehicle->owner_type = 'user';
		$vehicle->owner_id = 1;

		if(is_null(Input::file('picture'))){
			$vehicle->save();
			return Redirect::intended('administrator/vehicles');
		}else{
			$file = Input::file('picture');

			$destinationPath = 'assets/uploads/vehicles';
			$filename = date('Ymd').str_random(12);
			$vehicle->main_picture = $destinationPath.'/'.$filename;

			$upload_success = Input::file('picture')->move($destinationPath, $filename);

			if( $upload_success ) {
	   			$vehicle->save();
	   			return Redirect::intended('administrator/vehicles');
			} else {
	   			return Redirect::to('administrator/vehicles/create');
			}	
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}