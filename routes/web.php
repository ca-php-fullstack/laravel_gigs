<?php

use Illuminate\Support\Facades\Route;

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



// added some changes

auth()->loginUsingId(1);


Route::get('/', function () {
    return view('welcome');
});

Route::get('/gigs/create', '\App\Http\Controllers\GigController@create');

Route::post('/gigs', '\App\Http\Controllers\GigController@store');

Route::get('/gigs', '\App\Http\Controllers\GigController@index')->name('gigs');

