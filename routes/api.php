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

// buyer
Route::get('/buyer','BuyerController@index');
Route::post('/buyer','BuyerController@store');
Route::put('/buyer/{id}','BuyerController@update');
Route::post('/buyer/{buyer}/{ticket}','BuyerController@add_ticket');

//ticket
Route::get('/ticket','TicketController@index');
Route::post('/ticket','TicketController@store');
Route::put('/ticket/{id}','TicketController@update');