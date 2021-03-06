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
Route::group(['middleware' => ['web']], function () {
    Route::get('/suppliers','SupplierController@index');
    Route::post('/suppliers','SupplierController@store');
    Route::get('/suppliers/{id}','SupplierController@show');
    Route::post('/suppliers/products','SupplierController@showProducts');
    Route::delete('/suppliers/{id}','SupplierController@destroy');

    Route::get('/products','ProductController@index');
    Route::post('/products','ProductController@store');
    Route::get('/products/{id}','ProductController@show');
    Route::delete('/products/{id}','ProductController@destroy');


});

