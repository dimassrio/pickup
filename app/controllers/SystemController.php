<?php

class SystemController extends \BaseController {

	public function __construct(){
		parent::__construct();
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function search(){
		return View::make('search', $this->data);
	}
	public function index(){
		return View::make('index', $this->data);
	}

	public function login(){
		$this->data['pagetitle1'] = "USER";
		$this->data['pagetitle2'] = "LOGIN";

		return View::make('login', $this->data);
	}

	public function auth_login(){
		$username = Input::get('username');
		$password = Input::get('password');

		if (Auth::attempt(array('email'=> $username, 'password'=>$password))) {
			return Redirect::intended('/');
		}else{
			return Redirect::to('login');
		}
	}

	public function logout(){
		Auth::logout();
		return Redirect::intended('/');
	}
	public function dashboard(){
		return View::make('index', $this->data);
	}

	public function vendor(){
		$this->data['pagetitle1'] = "WELCOME";
		$this->data['pagetitle2'] = "HOME";
		return View::make('vendor.index', $this->data);

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
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

	public static function option_array($data){
		foreach ($data as $key => $value) {
			echo "<option value='".$key."'>".$value."</option>";
		}
	}

	public static function array_vehicle_year(){
		$result = array();
		for ($i=date('Y'); $i >date('Y')-10  ; $i--) { 
			$result[$i] = $i;
		}
		return $result;
	}
}