<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$this->data['pagetitle1'] = "DAFTAR";
		$this->data['pagetitle2'] = "USER";
		$this->data['users'] = User::all();
		return View::make('users.index', $this->data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->data['pagetitle1'] = "REGISTRASI";
		$this->data['pagetitle2'] = "USER";
		
		return View::make('users.create', $this->data);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$user = new User;
		$user->realname = Input::get('realname');
		$user->email = Input::get('email');
		$user->password = Hash::make(Input::get('password'));
		$user->birthdate = Input::get('birthdate');
		$user->save();

		return Redirect::to('dashboard');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$this->data['pagetitle1'] = "MY";
		$this->data['pagetitle2'] = "ACCOUNTS";
		$this->data['subtitle'] = "My Booking";
		return View::make('users.view', $this->data);
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
		$this->data['pagetitle2'] = "USER";
		$this->data['user'] = User::find($id);
		return View::make('users.edit', $this->data);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
			$user            = User::find($id);
			$user->realname  = Input::get('realname', $user->realname);
			$user->email     = Input::get('email', $user->email);
			if(!is_null(Input::get('password'))){
				$user->password  = Hash::make(Input::get('password'));
			}
			$user->birthdate = Input::get('birthdate', Input::get('birthdate'));
			$user->save();

		return Redirect::to('administrator/users');
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