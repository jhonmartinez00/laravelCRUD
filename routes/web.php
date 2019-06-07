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

Route::view('/','view');
Route::view('view','view');
Route::get('view','readController@index');
Route::view('create','create');
Route::post('create','createController@index');
Route::view('update','update');
Route::get('update/{announcement}','updateController@show');
Route::patch('update/{announcement}','updateController@update');
Route::view('delete/{announcement}','index');
Route::delete('view/{announcement}','readController@destroy');


