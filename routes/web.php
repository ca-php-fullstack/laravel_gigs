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

// show form
Route::get('/gigs/create', '\App\Http\Controllers\GigController@create');
// Add gig to database
Route::post('/gigs', '\App\Http\Controllers\GigController@store');

Route::get('/gigs', function () {
    echo "<h1> All gigs page </h1>";
})->name('gigs');