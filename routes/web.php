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

Route::get('/','IcoController@index');
Route::get('add','IcoController@create');
Route::post('add','IcoController@store');
Route::get('ico','IcoController@index');
Route::get('edit/{id}','IcoController@edit');
Route::post('edit/{id}','IcoController@update');
Route::delete('{id}','IcoController@destroy');