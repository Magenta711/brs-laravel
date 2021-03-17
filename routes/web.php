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
use Illuminate\Http\Request;

Route::get('/', function () {
    return redirect()->route('buyers');
});

//buyers
Route::get('buyers','BuyerController@index')->name('buyers');
Route::post('buyers','BuyerController@store')->name('buyers_store');
Route::put('buyers/{id}/ticket','BuyerController@add_tickets')->name('buyer_tickets');

//Tickets
Route::get('tickets','TicketController@index')->name('tickets');
Route::post('tickets','TicketController@store')->name('tickets_store');
Route::put('tickets/{id}/add_type','TicketController@add_type')->name('ticket_add_type');