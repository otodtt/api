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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('firms/list','ManufacturersController@firms_list');
Route::get('firm/show/{id}','ManufacturersController@show');
Route::post('firm/store','ManufacturersController@firm_store');
Route::put('firm/update/{id}','ManufacturersController@update');
Route::delete('firm/{id}','ManufacturersController@destroy');
