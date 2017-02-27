<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Salesmen routes
Route::get('salesmen', 'SalesmenController@index');
Route::get('salesmen/{id}', 'SalesmenController@show');
Route::post('salesmen', 'SalesmenController@store');
Route::put('salesmen/{salesman}', 'SalesmenController@update');
Route::patch('salesmen/{salesman}', 'SalesmenController@partial_update');
Route::delete('salesmen/{salesman}', 'SalesmenController@destroy');

//Salesman-Direction Routes
Route::post('salesmen/{salesman}/direction', 'SalesmanDirectionController@store');
Route::put('salesmen/{salesman}/direction', 'SalesmanDirectionController@update');

//Product routes
Route::get('products', 'ProductsController@index');
Route::get('products/{id}', 'ProductsController@show');
Route::post('products', 'ProductsController@store');
Route::put('products/{product}', 'ProductsController@update');
Route::patch('products/{product}', 'ProductsController@partial_update');
Route::delete('products/{product}', 'ProductsController@destroy');

//Product-Reviews routes
Route::post('products/{product}/reviews', 'ProductReviewsController@store');
Route::get('products/{product}/reviews', 'ProductReviewsController@index');
Route::delete('products/{product}/reviews/{review}', 'ProductReviewsController@destroy');
