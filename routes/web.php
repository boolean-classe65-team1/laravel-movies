<?php

use App\Http\Controllers\MovieController;
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

Route::get('/', function () {
    return view('home');
});

Route::middleware("auth")
->namespace("Admin")
->name("admin.")
->prefix("admin")
->group(function () {

Route::resource('movies', "MovieController");

Route::resource('tv_series',"TvSeriesController");


});

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();