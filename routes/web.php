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
})->name("home");

Auth::routes();



Route::middleware("auth")
->prefix("admin")
->name("admin.")
->namespace("Admin")
->group(function () {
    Route::resource('movies', "MovieController");

    Route::resource('tv_series', "TvSeriesController");

    Route::get('home', 'HomeController@index');
});

Route::get('{any?}', function () {
    return view('frontend');
})->where("any", ".*");