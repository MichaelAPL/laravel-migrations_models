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

/*Salesmen routes*/
Route::get('salesmen', 'SalesmenController@index');
Route::get('salesmen/{id}', 'SalesmenController@show');
Route::post('salesmen', 'SalesmenController@store');
Route::put('salesmen/{id}', 'SalesmenController@update');
Route::patch('salesmen/{id}', 'SalesmenController@patch');
Route::delete('salesmen/{id}', 'SalesmenController@destroy');
Route::post('salesmen/directions/{id}', 'SalesmenController@store');
Route::put('salesmen/directions/{id}', 'SalesmenController@update');
