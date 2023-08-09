<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'App\Http\Controllers\MoviesController@index')->name('movies.index');
Route::get('/movies/{movie}', 'App\Http\Controllers\MoviesController@show')->name('movies.show');

Route::get('/actors', 'App\Http\Controllers\ActorsController@index')->name('actors.index');
Route::get('/actors/page/{page?}', 'App\Http\Controllers\ActorsController@index');

Route::get('/actors/{actor}', 'App\Http\Controllers\ActorsController@show')->name('actors.show');
