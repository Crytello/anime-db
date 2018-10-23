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

Route::get('/home', 'StartseiteController@index');

Auth::routes();

Route::get('anime/index', 'AnimeController@index');
Route::get('anime/create', 'AnimeController@create');
Route::get('anime/edit/{id}', 'AnimeController@edit');
Route::get('anime/show/{id}', 'AnimeController@show');
Route::post('anime/store/', 'AnimeController@store');
Route::put('anime/update/{id}', 'AnimeController@update');
Route::delete('anime/delete/{id}', 'AnimeController@destroy');

Route::get('watchlist/index', 'WatchlistController@index');
Route::get('watchlist/create/{userID}/{$animeID}', 'WatchlistController@create');
Route::get('watchlist/edit/{id}/{$animeID}', 'WatchlistController@edit');
Route::get('watchlist/check/{userID}/{$animeID}', 'WatchlistController@check');