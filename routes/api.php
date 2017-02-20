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
Route::patch('salesmen/{salesman}', 'SalesmenController@update');
Route::delete('salesmen/{salesman}', 'SalesmenController@destroy');
Route::post('salesmen/{salesman}/direction', 'SalesmanDirectionController@store');
Route::put('salesmen/{salesman}/direction', 'SalesmanDirectionController@update');
