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

Route::get('/', function () {
    return redirect()->route('buyers');
});

Route::get('buyers',function ()
{
    return view('buyers');
})->name('buyers');

Route::get('tickets',function ()
{
    return view('tickets');
})->name('tickets');