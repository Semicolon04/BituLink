<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/suppliers', 'SuppliersController@viewSuppliers');
Route::get('/suppliers/details/{supplier}', 'SuppliersController@viewSupplier');
Route::get('/suppliers/new', 'SuppliersController@newSupplier');
Route::post('/suppliers/create', 'SuppliersController@createSupplier');