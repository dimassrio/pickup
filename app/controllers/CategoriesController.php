<?php

class CategoriesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{	
		$this->data['pagetitle1'] = "DAFTAR";
		$this->data['pagetitle2'] = "KATEGORI";
		$this->data['categories'] = Category::all();
		return View::make('categories.index', $this->data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('categories.create', $this->data);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$category = new Category;
		$category->name = Input::get('name');
		$category->description = Input::get('description');

		$file = Input::file('picture');

		$destinationPath = 'assets/uploads/categories';
		$filename = date('Ymd').str_random(12);
		$category->picture = $destinationPath.'/'.$filename;

		$upload_success = Input::file('picture')->move($destinationPath, $filename);

		if( $upload_success ) {
   			$category->save();
   			return Redirect::intended('administrator/categories');
		} else {
   			return Redirect::to('administrator/categories/create');
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
		$this->data['pagetitle2'] = "CATEGORY";
		$this->data['category'] = Category::find($id);
		return View::make('categories.edit', $this->data);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$category              = Category::find($id);
		$category->name        = Input::get('name', $category->name);
		$category->description = Input::get('description', $category->description);
		
		if(is_null(Input::get('picture'))){
			$category->save();
			return Redirect::intended('administrator/categories');
		}else{
				$file              = Input::file('picture');
				
				$destinationPath   = 'assets/uploads/categories';
				$filename          = date('Ymd').str_random(12);
				$category->picture = $destinationPath.'/'.$filename;
				
				$upload_success    = Input::file('picture')->move($destinationPath, $filename);
				
				if( $upload_success ) {
					$category->save();
					return Redirect::intended('administrator/categories');
				} else {
					return Redirect::to('administrator/categories/create');
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