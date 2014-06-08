<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'SystemController@index');
Route::get('search', 'SystemController@search');
Route::get('login', 'SystemController@login');
Route::post('login', 'SystemController@auth_login');
Route::get('logout', 'SystemController@logout');
Route::get('registration', 'UsersController@create');
Route::post('registration', 'UsersController@store');

Route::get('administrator', 'SystemController@vendor');
Route::resource('administrator/categories', 'CategoriesController');
Route::resource('administrator/users','UsersController');
Route::resource('administrator/vehicles','VehiclesController');
Route::get('dashboard','SystemController@dashboard');