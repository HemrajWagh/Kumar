<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});




Route::get('addProject','ProjectController@index');
Route::get('addProject','ProjectController@getAllData');
Route::post('addProject','ProjectController@create');
Route::post('delete','ProjectController@delete');

Route::get('getBuild','ProjectController@getBuild');
Route::get('getFlatType','ProjectController@getflatType');
Route::get('getFlatNo','ProjectController@getFlatNo');
// Route::get('submit','ProjectController@submit@submit');

Route::get('addProject','ProjectController@index');

Route::post('addProject','ProjectController@store');


// Route::get('addProject','BuildingController@showbuilding');
// Route::post('update','ProjectController@update');
// Route::get('search','ProjectController@search');